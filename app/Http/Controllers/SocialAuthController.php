<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\SocialAccountService;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use League\OAuth1\Client\Credentials\TokenCredentials;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {
        // Important change from previous post is that I'm now passing
        // whole driver, not only the user. So no more ->user() part

        $prov = Socialite::driver($provider);
        $tmpUser = $prov->user();
        $token = $tmpUser->token;

        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => Config::get('services.twitter.client_id'),
            'consumer_secret' => Config::get('services.twitter.client_secret'),
            'token'           => $token->getIdentifier(),
            'token_secret'    => $token->getSecret()
        ]);

        $stack->push($middleware);

        $client = new Client([
            'base_uri' => 'https://api.twitter.com/1.1/',
            'handler' => $stack
        ]);

        $twitterWhiteList = config('services.twitter.white_list'); //add batch twitter screen names to config/service.php twitter->white_list
        $response = $client->get('friendships/lookup.json?screen_name='.$twitterWhiteList, ['auth' => 'oauth']);

        $whiteListedAccounts = json_decode($response->getBody());

        $connections = [];
        foreach($whiteListedAccounts as $whiteListedAccount){
            $connections = array_merge($connections,$whiteListedAccount->connections);
        }

        $isFollowing = false;

        foreach($connections as $connection){
            $isFollowing = ($connection == 'following')? true: false;
        }

        dd($tmpUser);
        if ($isFollowing){  //Check user following any white listed twitter account
            $user = $service->createOrGetUser($prov,$tmpUser);
            auth()->login($user);

            return redirect()->to('/home');
        }else{
            return redirect()->to('/login');
        }

    }
}
