<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
class NewNotification extends Notification
{
    use Queueable;
    // public $user;
    public $user;
    public $category_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$id)
    {
        $this->user = $user;
        $this->category_id=$id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toDatabase($notifiable){
        return [
            'user_id'=>$this->user->id,
            'user_name'=>$this->user->name,
            'category_id'=>$this->category_id,
            'type'=>'New Book',// or new book come in
            'text'=>'This book in Our library right now!',
            'date'=>Date("d/m/Y")
        ];
    }
    
    public function countNotification(){

    }
}
