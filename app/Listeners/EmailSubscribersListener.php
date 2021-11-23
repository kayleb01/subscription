<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\MailSubcribers;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSubscribersListener implements ShouldQueue
{


    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        tap($event->subject(), function ($subject) {
            User::where(['subscribed' => '1', 'domain_id' => $subject->domain_id])
                ->get()->each->notify(new MailSubcribers($subject));
        });
    }
}
