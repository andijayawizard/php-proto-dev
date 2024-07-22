<?php
namespace App\Controllers;
use App\Controller;

class AboutController extends Controller
{	
	function __construct()
	{
		// code...
	}
	public function index($value='')
	{
		$title='About Us';
		$subTitle='Tentang Kami';
		$this->render('fr0nt3nd/about', ['title'=>$title, 'subTitle'=>$subTitle]);
	}
}