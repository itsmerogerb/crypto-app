<?php

namespace App\Http\Controllers;


class RankingController extends Controller
{
   
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.nomics.com/v1/currencies/ticker?key=dde0100d6d3e3cf20c9310622195c06e&ids=BTC,ETH,ADA,DOT&interval=1d,30d&convert=USD&per-page=100&page=1',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{"toEmails":["bryant_21@hotmail.com"],"ccEmails":[],"bbcEmails":[],"subject":"Resubmision","message":"jkdasjkldfasjkldf"}',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        return $response;
    }



}

