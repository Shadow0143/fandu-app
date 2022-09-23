<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostImage;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use App\Models\Testimonial;


class PostController extends Controller
{
    public function createPost(Request $request)
    {

        // dd($request->all());
        $post = new Post;
        $post->type = $request->postType;
        if ($request->postType == 'post') {
            $post->title = $request->post_title;
        } else {
            $post->title = $request->blog_title;
        }
        $post->sub_title = $request->blog_subtitle;

        if ($request->postType == 'blog') {
            $post->post_content = $request->blog_post;
        } else if ($request->postType == 'post') {
            $post->post_content = $request->post_post;
        } else {
            $post->post_content = $request->post;
        }
        if ($request->tags) {

            $tag = implode(",", $request->tags);
            $post->tag = $tag;
        }
        if ($request->categories) {

            $categ = implode(",", $request->categories);
            $post->category = $categ;
        }
        $post->status = '1';
        $post->created_by = Auth::user()->name;
        $post->save();

        $postImagearry = $request->post_image;
        if (!empty($postImagearry)) {
            for ($k = 0; $k < count($postImagearry); $k++) {
                $input['imagename'] = 'PostImage-' . Auth::user()->id . '-' . rand(000, 5000) . '.' . $postImagearry[$k]->getClientOriginalExtension();
                $destinationPath_selected = public_path('/post_images');
                $img2 = Image::make($postImagearry[$k]->getRealPath());
                $img2->resize(1024, 768, function ($constraint2) {
                    $constraint2->aspectRatio();
                });
                $img2->save($destinationPath_selected . '/' . $input['imagename']);

                $postimage = new postImage();
                $postimage->user_id = Auth::user()->id;
                $postimage->post_id  = $post->id;
                $postimage->image = $input['imagename'];
                $postimage->save();
            }
        }

        Alert::success('Success', 'Post added');
        return back();
    }

    public function postDetail($slug, $id)
    {
        $post = Post::where('id', $id)->first();
        $postImages = PostImage::where('post_id', $id)->get();
        return view('postDetail', compact('post', 'postImages'));
    }



    public function submitTestimonial(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->created_by = Auth::user()->id;
        $testimonial->auther_name = $request->auther_name;
        $input['imagename'] = 'AutherImage-' . Auth::user()->id . '-' . rand(000, 5000) . '.' . $request->auther_image->getClientOriginalExtension();
        $destinationPath_selected = public_path('/auther_images');
        $img2 = Image::make($request->auther_image->getRealPath());
        $img2->resize(1024, 768, function ($constraint2) {
            $constraint2->aspectRatio();
        });
        $img2->save($destinationPath_selected . '/' . $input['imagename']);
        $testimonial->auther_image =  $input['imagename'];
        $testimonial->auther_designation = $request->auther_designation;
        $testimonial->quotes = $request->user_quests;
        $testimonial->save();
        Alert::success('Success', 'Added');
        return back();
    }
}
