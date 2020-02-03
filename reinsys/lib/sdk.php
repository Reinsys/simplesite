<?php
namespace Reinsys\Lib;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Exception\ServerException;
/**
 * Reinsys SDK
 */

class Sdk
{
    /** @var Int $reinsysID is the Reinsys ID of the site.. */
    protected $reinsysID = null;
    protected $reinsysServer = 'https://api.reinsys.net';
    /**
     * Initializes the SDK with the site settings
     *
     * 
     *
     * @param Int $reinsysID is the Reinsys ID of the site.

     **/
    
    public function __construct(Int $reinsysID)
    {
        # code...
        $this->reinsysID = $reinsysID;
    }
 
    public function getResources(String $type, String $category = null, Int $limit = 20, Int $offset = 0, String $search = null){
        $params = [
          'offset' => (string) $offset,
          'limit' => (string) $limit
        ];
    
        if($search) $params['search'] = (string) $search;
        if($type) $params['taxonomy'] = (string) $type . '_category';
        if($category) $params['slug'] = (string) $category;
        try {
            $client = HttpClient::create();
            $url = $this->reinsysServer . '/resources/posts/' . (string) $type;
            $response = $client->request('GET', $url, [
                'query' => $params,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Reinsys-Client-ID' => (string) $this->reinsysID
                ]
            ]);

        }
        catch(Exception $e){
            return null;
        }
        
        return $response->toArray();
      }

      /**
       * undocumented function summary
       *
       * Undocumented function long description
       *
       * @param Int $id Id of the resource.
       * @return array
       **/
      public function getResource(Int $id)
      {
          # code...
        $client = HttpClient::create();
        $url = $this->reinsysServer . '/resources/post/' . (string) $id;
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Reinsys-Client-ID' => (string) $this->reinsysID
                ]
            ]);
        }
        catch(Exception $e){
            return null;
        }
        return $response->toArray();

      }

      /**
       * Get categories
       *
       *
       * @param String $type Type of resources
       * @return array
       **/
      public function getCategories(String $type)
      {
        # code...

        $params = [
            'order' => 'ASC',
            'taxonomy' => $type . '_category'
        ];
        try {
            $client = HttpClient::create();
            $url = $this->reinsysServer . '/resources/taxonomies';
            $response = $client->request('GET', $url, [
                'query' => $params,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Reinsys-Client-ID' => (string) $this->reinsysID
                ]
            ]);
        }
        catch(Exception $e){
            return null;
        }

        return $response->toArray();
      }
}
