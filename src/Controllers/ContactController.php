<?php
namespace App\Controllers;
use App\Controller;

class ContactController extends Controller
{	
	function __construct()
	{
		// code...
	}
	public function index($value='')
	{
		$title='Contact Us';
		$subTitle='for more info, call us';
		$this->render('fr0nt3nd/contact', ['title'=>$title, 'subTitle'=>$subTitle]);
	}
}