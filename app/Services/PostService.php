<?php
namespace App\Services;

use App\Models\Post;
use App\Events\EmailSubscribers;
use App\Http\Requests\PostRequest;

class PostService{

 public function createPost(PostRequest $request)
 {
    $post = Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'domain_id' => $request->domain_id
    ]);
    abort_if(!$post, 500, 'An error occured, please try again later');
    //fire the send mail event
    event(new EmailSubscribers($post));
    return $post;
 }
}
