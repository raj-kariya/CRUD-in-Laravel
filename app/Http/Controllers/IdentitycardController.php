<?php

namespace App\Http\Controllers;
use App\Models\Identitycard;
use Illuminate\Http\Request;

class IdentitycardController extends Controller
{
    //
    public function index()
    {
        $indentity = Identitycard::with(['user'])->get();
        dd($indentity);
    }

}
