<?php 

/**
 * PagesController | Custom Controller
 */

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$name = "Darwin";
		$email = "darwinmanalophi@gmail.com";
		$data = array("email" => "d@email.com", "name" => "Darwin");
		// return view('pages.about')->withName($name)->withEmail($email);
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

}