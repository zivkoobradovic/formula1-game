<?php

namespace App\Http\Controllers;

use App\Models\GamePlayer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\ShareService;
use App\Exports\ExportGameplayers;
use App\Services\SendCodeMailToThePlayer;
use Maatwebsite\Excel\Facades\Excel;

class GamePlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game-player.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GamePlayer  $gamePlayer
     * @return \Illuminate\Http\Response
     */
    public function show(GamePlayer $player)
    {
        $shareComponent = \Share::page(
            route('share-url', $player->slug),
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('game-player.results', ['player' => $player, 'shareComponent' => $shareComponent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GamePlayer  $gamePlayer
     * @return \Illuminate\Http\Response
     */
    public function edit(GamePlayer $gamePlayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GamePlayer  $gamePlayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GamePlayer $gamePlayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GamePlayer  $gamePlayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(GamePlayer $gamePlayer)
    {
        //
    }

    public function initiateGame() {

        $gamePlayer = GamePlayer::create(
            [
                'email' => request('email'),
                'slug' => Str::random(12),
                'avatar' => request('avatar'),
                'username' => request('username'),
                'phone' => request('phone'),
            ]
        );

        return redirect()->route('start-game', ['player' => $gamePlayer->slug]);
    }


    public function startGame(GamePlayer $player) {
        return view('game-player.start-game', ['player' => $player]);
    }


    public function endGame(GamePlayer $player) {

        $player->result = request('result');
        $player->code = Str::random(8);
        $player->status = true;
        $player->save();

        SendCodeMailToThePlayer::send($player);

        return view('game-player.results', ['player' => $player, 'shareComponent' => ShareService::share($player)]);
    }

    public function export()
    {
        return Excel::download(new ExportGameplayers, 'gameplayers.xlsx');
    }
}
