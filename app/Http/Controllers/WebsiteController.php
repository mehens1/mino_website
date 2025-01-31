<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WebsiteController extends Controller
{
    public function homePage()
    {
        $blogPosts = Blog::orderBy('id', 'desc')->take(3)->get();
        return view('home', compact('blogPosts'));
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function blogPage()
    {
        $blogPosts = Blog::orderBy('id', 'desc')->paginate(5);
        return view('blog', compact('blogPosts'));
    }

    public function singleBlogPage($id)
    {
        $blogDetails = [
            "recentPosts" => Blog::orderBy('id', 'desc')->take(3)->get(),
            "post" => Blog::where('id', $id)->first()
        ];
        return view('singleBlog', compact('blogDetails'));
    }
}
