<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

use Illuminate\Http\Request;

use View;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::newestFirst()->paginate(5);
		return view('posts.index', compact('posts'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::whereSlug($slug)->firstOrFail();
		View::share('TITLE', $post->title);
		View::share('SUBTITLE', $post->description);
		return view('posts.show', compact('post'));
	}
}
