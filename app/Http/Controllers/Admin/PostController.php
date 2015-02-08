<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

use Illuminate\Http\Request;
use View;

class PostController extends Controller {

    public function getIndex()
    {
        View::share('TITLE', 'Posts');
        View::share('SUBTITLE', 'I only want to write. And there\'s no college for that except life. - Dodie Smith');
        $posts = Post::newestFirst()->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function getCreate()
    {
        View::share('TITLE', 'New Post');
        View::share('SUBTITLE', 'I only want to write. And there\'s no college for that except life. - Dodie Smith');
        return view('admin.posts.form');
    }

    public function postCreate(Request $request)
    {
        $post = new Post($request->all());
        $post->save();
        return redirect('admin/posts/index')
            ->with('alert', 'Post created');
    }

    public function getUpdate($id)
    {
        //
    }

    public function getDelete(Request $request, $id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect('admin/posts/index')
            ->with('alert', 'Post deleted');
    }


}
