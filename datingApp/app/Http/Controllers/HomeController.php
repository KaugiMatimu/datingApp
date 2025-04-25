<?php

namespace App\Http\Controllers;

use App\Services\EmojiService;
use App\Services\RandomUserService;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\UserSettings;

class HomeController extends Controller
{
    private EmojiService $emojiService;
    private RandomUserService $randomUserService;

    public function __construct(EmojiService $emojiService, RandomUserService $randomUserService)
    {
        $this->middleware('auth');
        $this->emojiService = $emojiService;
        $this->randomUserService = $randomUserService;
    }

    public function index(): View|RedirectResponse
    {
        $user = auth()->user();
        
        // Eager load settings with the user
        $user->load('settings');
        
        // If no settings exist, create them
        if (!$user->settings) {
            $user->settings()->create([
                'search_age_from' => 18,
                'search_age_to' => 99,
                'search_male' => 1,
                'search_female' => 1
            ]);
            $user->refresh(); // Refresh to load the new settings
        }

        $otherUser = $this->randomUserService->getUser($user, $user->settings);

        return view('home', [
            'otherUser' => $otherUser,
            'user' => $user,
            'pictures' => $otherUser?->pictures,
            'likeEmoji' => $this->emojiService->getPositiveEmojiUrl(),
            'dislikeEmoji' => $this->emojiService->getNegativeEmojiUrl()
        ]);
    }
}