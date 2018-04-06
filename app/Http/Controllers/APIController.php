<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Canales;

class APIController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function contadorFortniteWins($id)
    {
        $canal = Canales::find($id);
        if (isset($canal))
        {
        	$response = Curl::to('https://api.fortnitetracker.com/v1/profile/'.$canal->plataforma.'/'.$canal->username)
        	->withHeader('TRN-Api-Key: '.env('TRN_API_KEY'))
            ->get();
            $usuario = json_decode($response);
            $wins = $usuario->stats->p2->top1->valueInt; // Sumamos las wins de SOLO
            $wins += $usuario->stats->p10->top1->valueInt; // DUO
            $wins += $usuario->stats->p9->top1->valueInt; //SQUAD
        	return intval($wins-$canal->wins+$canal->wins_extra);
        }
        return "Error: Canal no registrado";
    }
}
