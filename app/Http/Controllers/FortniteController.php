<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Canales;

class FortniteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

	public function comenzarContadorWins(Request $request)
	{
		$response = Curl::to('https://api.fortnitetracker.com/v1/profile/'.$request->input('plataforma').'/'.$request->input('username'))
        	->withHeader('TRN-Api-Key: '.env('TRN_API_KEY'))
        	->get();
        $usuario = json_decode($response);
        if (!isset($usuario->accountId))
        	return "-1|Usuario no encontrado";
        else
        {
        	$wins = $usuario->stats->p2->top1->valueInt; // Sumamos las wins de SOLO
        	$wins += $usuario->stats->p10->top1->valueInt; // DUO
        	$wins += $usuario->stats->p9->top1->valueInt; //SQUAD
        	$canal = new Canales;
        	$canal->username = $request->input('username');
        	$canal->plataforma = $request->input('plataforma');
        	$canal->wins = $wins;
        	$canal->wins_extra = $request->input('wins_extra');
        	$canal->save();
        	return "1|".$canal->id;
        }
	}

    public function index()
    {
    	return view("dashboard.fortnite.index");
    }
}
