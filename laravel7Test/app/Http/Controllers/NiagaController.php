<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Prices;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NiagaController extends Controller
{
    public function index(){
        $price = DB::table('Prices')->select('harga', 'diskon')->get();
        return view('niaga',['price' => $price]);
        }
}
