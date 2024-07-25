<?php
// namespace App\Controllers\ApiKey;
// use App\Controller;
// use App\Controllers\ApiKey;
require_once 'ApiKey.php';

// class UserController extends Controller {
class UserController {
	public function index($value='')
	{
		$title='Users';
		$items=$this->getAll(1);
		$this->render('fr0nt3nd/users', ['items'=>$items, 'title'=>$title]);
	}
	public function getAll(string $paging) {
		$url = getenv('baseUrl') . '/api/api.php/records/users?page='.$paging.',10';
		$apiKey=new ApiKey();
		$apiKey=$apiKey->apiKey($url);
	    $array = json_decode($apiKey, true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	public function getDetails(string $id) {
		$url = getenv('baseUrl') . '/api/api.php/records/users/'.$id.'?join=user&exclude=user.password';
		$apiKey=new ApiKey();
		$apiKey=$apiKey->apiKey($url);
		$detail = json_decode($apiKey, true);		
		return $detail;
	}
	public function getSize(int $size) {
		$url = getenv('baseUrl') . '/api/api.php/records/users?join=user&exclude=users.ktrg,user.password&filter=pub,eq,1&order=id,desc&size='.$size;
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
}
