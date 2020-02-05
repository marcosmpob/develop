<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    //
    function teste(){
        echo "entrou na função";
    }

    function financeiro(){
        echo "Entrou Financeiro";
    }

    function dashboard(){
        echo "Entrou dashboard";
    }

    function produtos(){
        echo "Entrou produto";
    }
}
