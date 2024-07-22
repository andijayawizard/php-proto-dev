<?php
class SiteController { 
	public function home() { 
		echo "Home page!"; 
	}
	public function aboutUs() { 
		return "About Us";
	} 
	public function contactUs() { 
		return "Contact Us";
	} 
	public function users() {
		return "Users";
	}
	public function brands() {
		return "Brands";
	}
	public function blog() {
		return "Blog";
	}
} 
