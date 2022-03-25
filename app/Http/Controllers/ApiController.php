<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;


class ApiController extends Controller
{
    //
    public function getAllPosts() {
        // logic to get all posts goes here
        $posts = Post::get()->toJson(JSON_PRETTY_PRINT);
    return response($posts, 200);
      }
  
      public function createPost(Request $request) {
        // logic to create a post goes here
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image_path = $request->image_path;
        $post->user_id = $request->user_id;

        $post->save();
    
        return response()->json([
            "message" => "Your post has been added"
        ], 201);
      }
  
      public function getPost($slug) {
        // logic to get a users post goes here
      }
  
      public function updatePost(Request $request, $slug) {
        // logic to update a users post goes here
      }
  
      public function deletePost ($slug) {
        // logic to delete a users post goes here
      }
}
