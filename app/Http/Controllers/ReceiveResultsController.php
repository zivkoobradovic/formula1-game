<?php

namespace App\Http\Controllers;

use App\Models\GamePlayer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\SendCodeToThePlayer;
use Illuminate\Support\Facades\Mail;

class ReceiveResultsController extends Controller
{
    public function handle()
    {
        // $email = request()->email;
        // $gameStatus = request()->games['status'];
        // $gameResults = request()->games['results'];
        // $slug = Str::random(12);
        // $code = Str::random(8);
        // $gamePlayer = GamePlayer::create(
        //     [
        //         'email' => $email,
        //         'results' => $gameResults,
        //         'status' => $gameStatus,
        //         'slug' => $slug,
        //         'code' => $code,
        //     ]
        // );


        // $details = [
        //     'results' => $gamePlayer->results,
        //     'code' => $gamePlayer->code,
        //     'result_url' => route('share-url', $gamePlayer->slug),
        // ];
        // Mail::to($gamePlayer->email)->send(new SendCodeToThePlayer($details));
        // return $gamePlayer;
    }
}
