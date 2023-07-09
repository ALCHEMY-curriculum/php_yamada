<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//laravel課題１と２まとめてみてください//
class IndexController extends Controller {
    public function __invoke(Request $request)
    {
        return view('tweets.index', ['name' => 'Alchemy']);
    }
}
class ShowTweetController extends Controller {
    public function __invoke($id) {
        return view('tweets.index', ['name' => 'Alchemy'.$id]);
    }
}