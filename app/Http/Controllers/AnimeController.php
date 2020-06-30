<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datetime;
class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('anime')->orderBy('id','DESC')->where('id', '<>', 1)->get();
    
        return view('cpadmin.modules.anime.index',['anime'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpadmin.modules.anime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =($request->except('_token'));
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
        // dd($data);
         DB::table('anime')->insert($data); 

         return redirect()->route('admin.anime.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = DB::table('anime')->where('id',$id)->first();

        return view('cpadmin.modules.anime.edit',['item'=>$cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =($request->except('_token'));
        $data['updated_at'] = new DateTime();
     
        DB::table('anime')->where('id',$id)->update($data); 

        return redirect()->route('admin.anime.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('anime')->where('id',$id)->delete();

        return redirect()->route('admin.anime.index');
    }
}
