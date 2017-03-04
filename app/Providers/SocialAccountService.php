<?php
/**
 * Created by PhpStorm.
 * User: Kokila
 * Date: 3/3/17
 * Time: 1:44 PM
 */

namespace App\Providers;

use Laravel\Socialite\Contracts\Provider;
use App\SocialAccount;
use App\User;


class SocialAccountService
{
    public function createOrGetUser(Provider $provider, \Laravel\Socialite\One\User $authuser)
    {

        $providerUser = $authuser;
        $providerName = class_basename($provider);

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'password' => bcrypt(str_random()),
                    'name' => $providerUser->getName(),
                    'status' => 'first_time',
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}