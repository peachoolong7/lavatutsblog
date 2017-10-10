<?php
/**
 * Created by PhpStorm.
 * User: Nday
 * Date: 10/9/2017
 * Time: 10:27 AM
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;


class BlogController extends Controller{
    public function getSingle($slug){

        $post = Post::where('slug','=',$slug)->first();


        return view('blog.single')->with('post',$post);
    }
}
