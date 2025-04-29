<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
    //
    public function index()
    {
        $brand = Brand::with(['products'])->get();
        dd($brand);
    }

}
