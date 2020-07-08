<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Datetime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $data = DB::table('flim')->orderBy('created_at','DESC')->get();

        return view('index',['collectionlastmovie'=>$data]);  
=======
        return view('index');
        
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
    }
    public function home(){
         return redirect()->route('admin.flim.index');
    }
}
