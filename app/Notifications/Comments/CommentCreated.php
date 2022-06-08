<?php

namespace App\Notifications\Comments;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\App\Notifications\Channels\DatabaseChannel;
use Illuminate\Notifications\Messages\MailMessage;
use App\App\Notifications\Notification;

class CommentCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public Comment $comment)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [
            DatabaseChannel::class
        ];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        // dd($this->models());
        return [
            'author' => [
                'name' => $this->comment->author->name,
                'id'=>$this->comment->author->id
            ],
            'comment' => [
                'id' => $this->comment->id,
                'body' => $this->comment->body
            ]
        ];
    }
}
