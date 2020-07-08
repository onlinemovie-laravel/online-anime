<?php

namespace App\Http\Controllers;
use App\Services\ImgurService;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('flim')->orderBy('id','DESC')->get();
    
        return view('cpadmin.modules.flim.index',['flim'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpadmin.modules.flim.create');
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
        $sub = "";
        $test = unserialize(serialize($request['category']));
            foreach ($test as $key => $value) {
                $sub = $sub."{$value} " ;
        }
        $data['category'] = $sub;
        
        $image = $data['image'];
       //    dd($image->getRealPath());
        // call service to upload image to imgur.com
        $imageUrl = ImgurService::uploadImage($image->getRealPath());
        $data['image'] = $imageUrl;
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
       
         DB::table('flim')->insert($data); 
         return redirect()->route('admin.flim.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show()
    {
        $data = DB::table('flim')->orderBy('updated_at','DESC')->take(5)->get();
    
        return view('index',['collectionlastmovie'=>$data]);
    }

    public function more(Request $request){
        dd($request);
    }
=======
    public function show($id)
    {
       
    }

>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flim = DB::table('flim')->where('id',$id)->first();
        return view('cpadmin.modules.flim.edit',['flim'=>$flim]);
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
        $obj = DB::table('flim')->select('image')->where('id',$id)->first();
        
        $data =($request->except('_token'));
        $sub = "";
        $test = unserialize(serialize($request['category']));
            foreach ($test as $key => $value) {
                $sub = $sub."{$value} " ;
        }
        $data['category'] = $sub;
        if(isset($data['image'])){
            $image = $data['image'];
            $imageUrl = ImgurService::uploadImage($image->getRealPath());
            $data['image'] = $imageUrl;
        }
        else{
            $data['image'] = $obj->image;
        }
<<<<<<< HEAD
=======
        
       //    dd($image->getRealPath());
        // call service to upload image to imgur.com
        
       
        $data['created_at'] = new DateTime();
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
        $data['updated_at'] = new DateTime();
       
         DB::table('flim')->where('id',$id)->update($data); 
         return redirect()->route('admin.flim.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        DB::table('chapter')->where('flim_id',$id)->delete();
=======
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
        DB::table('flim')->where('id',$id)->delete();

        return redirect()->route('admin.flim.index');
    }
}
