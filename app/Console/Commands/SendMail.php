<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\EmailSubscribers;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to subscribed users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = array(
           "title" => "Welcome onboard",
           "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officia placeat deserunt autem dicta illo nihil eveniet! Tenetur numquam, soluta reiciendis inventore suscipit distinctio tempora facere illum aliquam ducimus rerum."
       );

       event(new EmailSubscribers($data));
    }
}
