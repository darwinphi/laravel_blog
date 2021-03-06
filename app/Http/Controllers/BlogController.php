<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	public function getSingle($slug) {
		// Fetch from the DB based on slug
		
		$post = Post::where('slug', '=', $slug)->first(); 

		// Return the view and pass in the object
		return view('blog.single')->withPost($post);
	}
}
