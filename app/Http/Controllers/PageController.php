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

    public function show()
    {
        $data = DB::table('flim')->orderBy('updated_at','DESC')->get()->take(28);
        $title = "Tẩt Cả Phim - Anime SQL";
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }

    public function pagecate($name){
        $data = DB::table('flim')->where('category', 'like', '%'.$name.'%')->get();
        $title = "THỂ LOẠI PHIM :".str_replace('-',' ',$name)." - Anime SQL";
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }

    public function yearpage($year){
        $data = DB::table('flim')->where('year',$year)->get();

        $title = "Năm Sản Xuất :".$year." - Anime SQL";
  
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }

    public function statuspage($status){
        $data = DB::table('flim')->where('status',$status)->orderBy('updated_at','DESC')->get();
        if ($status == 0) {
            $title = "Phim đã Hoàn Thành - Anime SQL";
        } else {
            $title = "Phim chưa hoàn Thành - Anime SQL";
        }
        return view('flim.category',['listflim'=>$data,'title'=>$title]);
    }
    public function videopage($id){
        $data = DB::table('chapter')->where('flim_id',$id)->orderBy('updated_at','DESC')->first();
        $title = DB::table('flim')->where('id',$id)->first();
        if (isset($data)) {
            return view('flim.player',['item'=>$data,'title'=>$title]);
        } else {
            $data = DB::table('chapter')->where('flim_id',9)->orderBy('updated_at','DESC')->first();
            $title = DB::table('flim')->where('id',9)->first();
            return view('flim.player',['item'=>$data,'title'=>$title]);
        }
        
        
    }

    

}
