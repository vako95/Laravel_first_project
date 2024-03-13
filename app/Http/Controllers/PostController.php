<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      $admin = Admin::find(1);
      dd($admin);
    }
}
