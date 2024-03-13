<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\NewsModel;
use Illuminate\Http\Request;

// $tests = Admin::where('is_published', 2)->first();   dump($tests->title);
        // dd('end');

// $tests = Admin::where('is_published', 2)->get();
// foreach($tests as $tests_key){
//     dump($tests_key->title);
// }

class AdminController extends Controller
{
    // public function index(){

    //     $post = Admin::find(1);
    //     dd($post);


    // }

    public function index(){
    $admin = NewsModel::find(1);
      dd($admin);
    }
    public function test(){
        $tests = Admin::where('is_published', 2)->first();
       dump($tests->title);
        dd('end');
    }
}
