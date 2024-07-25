<?php
require_once 'ApiKey.php';

class BrandController {
	function getAll(string $paging) {
		$url = getenv('baseUrl') . '/api/api.php/records/brands?page='.$paging.',10';
		$apiKey=new ApiKey();
		$apiKey=$apiKey->apiKey($url);
	    $array = json_decode($apiKey, true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	function getDetails(string $id) {
		$apiKey=new ApiKey();
		$url = getenv('baseUrl') . '/api/api.php/records/brands/'.$id.'?join=user&exclude=user.password';
		$apiKey=$apiKey->apiKey($url);
		$detail = json_decode($apiKey, true);		
		return $detail;
	}
	public function getSize(int $size) {
		$url = getenv('baseUrl') . '/api/api.php/records/brands?join=user&exclude=brands.ktrg,user.password&filter=pub,eq,1&order=id,desc&size='.$size;
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
}
