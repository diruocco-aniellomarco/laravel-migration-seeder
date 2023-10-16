<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
  {
    $trains = train::all();
    return view('train.index', compact('trains'));
  }
}
