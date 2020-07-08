<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inforpage($id)
    {
        $data = DB::table('flim')->where('id',$id)->first();
        
        return view('flim.infor',['flim'=>$data]);
    }

    public function pagecate($name){
        $data = DB::table('flim')->where('category', 'like', '%'.$name.'%')->get();
        $title = "THỂ LOẠI PHIM :".str_replace('-',' ',$name)." - Anime Vietsub Online";
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }

    public function yearpage($year){
        $data = DB::table('flim')->where('year',$year)->get();

        $title = "Năm Sản Xuất :".$year." - Anime Vietsub Online";
  
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }

}
