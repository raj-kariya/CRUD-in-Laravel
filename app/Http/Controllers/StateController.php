<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
class StateController extends Controller
{
    //
    public function index(){
        $state = State::with(['country'])->get();
        dd($state);
    }
}
