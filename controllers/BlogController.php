<?php
use DevCoder\DotEnv;
include_once '../DotEnv.php';
(new DotEnv(__DIR__.'/../.env'))->load();

class BlogController {
	function getAll(string $paging) {
		$url = getenv('baseUrl') . '/api/api.php/records/blog?join=user&exclude=blog.ktrg,user.password&filter=pub,eq,1&order=id,desc&page='.$paging.',10';
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	function getDetails(string $id) {
		$url = getenv('baseUrl') . '/api/api.php/records/blog/'.$id.'?join=user&exclude=user.password';
		$detail = json_decode(apiKey($url), true);		
		return $detail;
	}
	public function getSize(int $size) {
		$url = getenv('baseUrl') . '/api/api.php/records/blog?join=user&exclude=blog.ktrg,user.password&filter=pub,eq,1&order=id,desc&size='.$size;
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
}
