<?php
namespace App\Controllers;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

use Reinsys\Lib\Sdk as ReinsysSDK;
use App\Controllers\ErrorController;

/**
 * undocumented class
 */

class ContentController extends \Reinsys\Simple\Controller{
    public $sdk; 
    public $cacheDir;
    function __construct(){
        $this->initialize();
        $this->sdk = new ReinsysSDK($this->getWebsite()->reinsysID);
        $this->cacheDir = __DIR__ . '/../../cache/' . $this->getWebsite()->reinsysHandleName;
    }
    public function home(){
        return $this->render('base.html');
    }
    public function page($page){
        $result = $this->getPage($page);
        if(null === $result) {
            return (new ErrorController)->notfound();
        }
        else return $this->render('page.html', $result);
    }
    public function resource($id){
        $result = $this->getResource($id);
        if(null === $result) {
            return (new ErrorController)->notfound();
        }
        else return $this->render('page.html', $result);
    }
    public function resources($type, $category = null, $template = null, $limit = null, $offset = null){
        if(null === $limit) $limit = $this->getRequest()->query->get('limit', 20);
        if(null === $offset) $offset = $this->getRequest()->query->get('offset', 0);
        if(null === $template) $template = 'resources.html';
        $search = $this->getRequest()->query->get('search', null);

        $result = $this->getResources($type, $category, $limit, $offset, $search);

        if(!isset($result['data'])) {
            return (new ErrorController)->notfound();
        }
        else return $this->render($template, ['data' => $result['data']]);
    }

    public function getPage($t){
        $page = strtolower($t);

        $cache = new FilesystemAdapter('content', 86400, $this->cacheDir);
        $cacheKey = 'reinsys_content_pages';

        $response = $cache->get($cacheKey, function (ItemInterface $item) {
            $item->expiresAfter(86400);
            return $this->sdk->getResources('page', null, 1000);
        });
        $data = (isset($response['data'])) ? $response['data'] : [];
        
        $result = null;
        foreach($data as $record) {
            if (strtolower($record['meta']['_page_identity']) === strtolower($page)) {
                $result = $record;
                break;
            }
        }
        if(null === $result) {
            return null;
        }
        else return $result;
    }

    public function getResources($type, $category, $limit = 20, $offset = 0, $search = null)
    {
        # code...
        if(null !== $search){
            return $this->sdk->getResources($type, $category, $limit, $offset, $search);
        }
        else{
            $cache = new FilesystemAdapter('content', 86400, $this->cacheDir);
            $cacheKey = 'reinsys_content_resources_' . $type . '_' . $category . '_' . $limit . '_' . $offset;

            return $cache->get($cacheKey, function (ItemInterface $item) use($type, $category, $limit, $offset) {
                $item->expiresAfter(86400);
                return $this->sdk->getResources($type, $category, $limit, $offset);
            });
        }
    }
    public function getCategories(String $t)
    {
        # code...
        $type = strtolower($t);

        $cache = new FilesystemAdapter('content', 86400, $this->cacheDir);
        $cacheKey = 'reinsys_content_categories_' . $type;

        $result = $cache->get($cacheKey, function (ItemInterface $item) use($type) {
            $item->expiresAfter(86400);
            return $this->sdk->getCategories($type);
        });
        return (isset($result['data'])) ? $result['data'] : [];
    }
    public function getResource(Int $id)
    {
        # code...

        $cache = new FilesystemAdapter('content', 86400, $this->cacheDir);
        $cacheKey = 'reinsys_content_resource_' . $id;

        return $cache->get($cacheKey, function (ItemInterface $item) use($id) {
            $item->expiresAfter(86400);
            return $this->sdk->getResource($id);
        });

    }

}