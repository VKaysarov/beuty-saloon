<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class MasterController extends Controller
{
    public function index() {
        return Master::all();
    }

    public function show (Master $id){
        return $id;
    }
}
