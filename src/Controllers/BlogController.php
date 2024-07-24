<?php
require_once 'ApiKey.php';
// namespace App\Controllers;
// use App\Controller\ApiKey;

class BlogController {
	public function getAll(string $paging) {
		$url = getenv('baseUrl') . '/api/api.php/records/blogs?page='.$paging.',10';
		$apiKey=new ApiKey();
	    $array = json_decode($apiKey->apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	public function getDetails(string $id) {
		$url = getenv('baseUrl') . '/api/api.php/records/blogs/'.$id;
		$apiKey=new ApiKey();
		$detail = json_decode($apiKey->apiKey($url), true);		
		return $detail;
	}
	public function getSize(int $size) {
		$url = getenv('baseUrl') . '/api/api.php/records/users?join=user&exclude=users.ktrg,user.password&filter=pub,eq,1&order=id,desc&size='.$size;
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
}
