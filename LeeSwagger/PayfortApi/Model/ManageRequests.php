<?php

namespace LeeSwagger\PayfortApi\Model;

class ManageRequests{

	/**
	 * @param array $params (This is a multi-dimensional array with each item
	 * consisting of a single array. Ex. [[orderId=>1, status=>1], [orderId=>2, status=0]])
	 *
	 * @param string $method Pls refer to Zend\Http\Request for valid values. Ex. Zend\Http\Request::METHOD_POST
	 *
	 * @param string $url This is a valid API endpoint. Ex. https://postman-echo.com/transform/collection?from=2&to=1
	 *
	 * @return object $this;
	**/
	public function sendRequest($params, $method, $url){
		
		$request = $this->setHeader();
		$request = $this->setAdditionalHeaders($request, $url);
		$request = $this->setMethod($request, $method);
		$request = $this->setParams($request, $params);
			
		$client = $this->getCurlClient();
		
		return $this->send($client, $request, $params);
	}
	
	
	private function setHeader(){
		
		$token = 'token';
		$httpHeaders = new \Zend\Http\Headers();
		$httpHeaders->addHeaders([
		   'Authorization' => 'Bearer ' . $token,
		   'Accept' => 'application/json',
		   'Content-Type' => 'application/json'
		]);	

		return $httpHeaders;
	}
	
	private function setAdditionalHeaders($httpHeaders, $url){

		 $request = new \Zend\Http\Request();
		 $request->setHeaders($httpHeaders);
		 $request->setUri($url);
		 return $request;
	}
	
	private function setMethod($request, $method){
		$request->setMethod($method);
		return $request;
	}
	
	private function setParams($request, $params){
	    if($request->getMethod() === $request::METHOD_POST){
         //   $request->setPost(new \Zend\Stdlib\Parameters($params));
        }else{

        }
          //  $request->setQuery(new \Zend\Stdlib\Parameters($params));

		return $request;
	}
	
	private function getCurlClient(){
		$client = new \Zend\Http\Client();
		$options = [
		   'adapter'   => 'Zend\Http\Client\Adapter\Curl',
		   'curloptions' => [CURLOPT_FOLLOWLOCATION => true],
		   'maxredirects' => 5,
		   'timeout' => 300
		 ];
		 return $client->setOptions($options);		
	}
	
	private function send($client, $request, $params){

		$request->setContent(json_encode($params));
		return $client->send($request);
	}

	public function getBodyMessage(\Zend\Http\Response $response){
        $body = $response->getBody();
        return json_decode($body, true);
    }
    /**
     * @param array $data
     * @param string $endpoint
     * @param string $method
     *
     * @return mixed
     */

    public function sendFormRequest(array $data,  $endpoint, $method){

        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, $endpoint);

        if($method === CURLOPT_POST){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,  http_build_query($data));
        }


        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);
        return $server_output;

    }

}