<?php

namespace App\Services;

use App\User;
use App\UserSettings;

class RandomUserService
{
    public function getUser(User $user, UserSettings $userSettings): ?User
    {
        try {
            if ($userSettings->search_female == 1 && $userSettings->search_male == 1) {
                return User::inRandomOrder()
                    ->searchWithSettings(
                        $userSettings->search_age_from,
                        $userSettings->search_age_to,
                        'both',
                        $user->id  // Changed from $userSettings->user_id to $user->id
                    )
                    ->searchWithoutLikesAndDislikes($user->id)
                    ->first();
            } elseif ($userSettings->search_female == 1) {
                return User::inRandomOrder()
                    ->searchWithSettings(
                        $userSettings->search_age_from,
                        $userSettings->search_age_to,
                        'female',
                        $user->id  // Changed from $userSettings->user_id to $user->id
                    )
                    ->searchWithoutLikesAndDislikes($user->id)
                    ->first();
            } elseif ($userSettings->search_male == 1) {
                return User::inRandomOrder()
                    ->searchWithSettings(
                        $userSettings->search_age_from,
                        $userSettings->search_age_to,
                        'male',
                        $user->id  // Changed from $userSettings->user_id to $user->id
                    )
                    ->searchWithoutLikesAndDislikes($user->id)
                    ->first();
            }
            
            return null;
        } catch (\Exception $e) {
            // Log error if needed
            return null;
        }
    }
}