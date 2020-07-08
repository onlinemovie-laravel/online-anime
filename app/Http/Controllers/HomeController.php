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
        $data = DB::table('flim')->orderBy('created_at','DESC')->get();

        return view('index',['collectionlastmovie'=>$data]);  
    }
    public function home(){
         return redirect()->route('admin.flim.index');
    }
}
