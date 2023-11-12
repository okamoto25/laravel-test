<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Services\TweetService;
use Exception;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // つぶやき一覧を取得
        $tweets = $tweetService->getTweets();
        return view('tweet.index', [
            'name' => 'larabel',
            'tweets' => $tweets
        ]);
    }
}
