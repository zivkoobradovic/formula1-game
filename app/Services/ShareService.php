<?php

namespace App\Services;

class ShareService
{

    public static function share($player) {
        return \Share::page(
            route('share-url', $player->slug),
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
    }


}
