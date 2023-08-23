<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use DB;


class MainController extends Controller
{
  public function home(){
    return view('index');
  }

}
