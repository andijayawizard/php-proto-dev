<?php
// namespace App\Controller;
// use App\Controller;

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
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	function getDetails(string $id) {
		$url = getenv('baseUrl') . '/api/api.php/records/users/'.$id.'?join=user&exclude=user.password';
		$detail = json_decode(apiKey($url), true);		
		return $detail;
	}
	public function getSize(int $size) {
		$url = getenv('baseUrl') . '/api/api.php/records/users?join=user&exclude=users.ktrg,user.password&filter=pub,eq,1&order=id,desc&size='.$size;
	    $array = json_decode(apiKey($url), true);
	    $items = isset($array['records']) ? $array['records'] : array();		
	    return $items;
	}
	private function apiKey($url, $response=null) {
	  $curl = curl_init($url);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($curl, CURLOPT_HTTPHEADER, [
	    'X-API-Key: '.getenv('apiKey'),
	    'Content-Type: application/json'
	  ]);
	  $response = curl_exec($curl);
	  curl_close($curl);
	  // echo $response . PHP_EOL;  
	  return $response;
	}
}
