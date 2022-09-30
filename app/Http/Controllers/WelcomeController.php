<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\Testimonial;
use App\Models\Contents;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::where('status', '1')->orderBy('id', 'desc')->get();
        foreach ($posts as $key => $val) {
            $post_image = PostImage::select('image')->where('post_id', $val->id)->get();
            $posts[$key]->image = $post_image;
        }

        $content = Contents::orderBy('id', 'desc')->first();

        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        return view('welcome', compact('posts', 'testimonials', 'content'));
    }
}
