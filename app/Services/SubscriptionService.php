<?php
namespace App\Services;

use App\Models\User;
use App\Http\Requests\subscriptionRequest;

class SubscriptionService{

    public function subscribeUser(subscriptionRequest $request)
    {
       $sc = User::create([
           'email' => $request->email,
           'subscribed' => 1,
           'domain_id' => $request->domain_id
       ]);
        abort_if(!$sc, 500, 'An errot occured please try again later');
        return $sc;
    }
}
