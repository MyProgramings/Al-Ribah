<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Events\CommentNotification;
use App\Models\Notification;
use App\Models\Alert;

class CommentController extends Controller
{
    public $comment;

    public function __construct(Comment $comment)
	{
    	$this->comment = $comment;
	}

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $comment = $this->comment;
        $comment->body = $request->get('body');
        $comment->user()->associate($request->user());
        $comment->post_id = $request->get('post_id');
        $post = Post::find($request->get('post_id'));
        
        $post->comments()->save($comment);

        // Notification
        $notification = new Notification();
        if ($request->user()->id != $post->user_id) {
            $notification->user_id = $request->user()->id;
            $notification->post_id = $post->id;
            $notification->post_userId = $post->user_id;
            $notification->save();
        }

        $data = [
            'post_title' => $post->title,
            'post' => $post,
            'user_name' => $request->user()->name,
            'user_image' => $request->user()->profile_photo_url
        ];
        event(new CommentNotification($data));

        if ($request->user()->id != $post->user_id) {
            $alert = Alert::where('user_id', $post->user_id)->first();

            $alert->alert++;
            $alert->save();
        }

        return back()->with('success', 'تم إضافة التعليق بنجاح');
    }

    public function replyStore(Request $request)
    {
        $this->validate($request, [
            'comment_body' => 'required',
        ]);
        
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $reply->post_id = $request->get('post_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back()->with('success', 'تم إضافة الرد بنجاح');
    }

    public function destroy($id)
    {
        $comment = $this->comment::find($id);

        $comment->delete();

        return back()->with('success', 'تم حذف التعليق بنجاح');
    }
}
