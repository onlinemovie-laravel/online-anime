<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jwplayer;
class ChapterController extends Controller
{
    private static $client = '7O8Qgq2m';
    private static $serect = 'uT2IyjXQsc9C3ezF2noBgNEc';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('chapter')->orderBy('id','DESC')->get();
    
        return view('cpadmin.modules.chap.index',['chapter'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('flim')->orderBy('created_at','DESC')->get();
    
        return view('cpadmin.modules.chap.create',['flim'=>$data]);
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
        $flim = DB::table('flim')->select('name')->where('id',$data['flim_id'])->first();
       
    //    $jwplatform_api = new Jwplayer\JwplatformAPI('7O8Qgq2m', 'uT2IyjXQsc9C3ezF2noBgNEc');
       $jwplatform_api = new Jwplayer\JwplatformAPI(ChapterController::$client, ChapterController::$serect);
        $target_file = $data['content']->getRealPath();
        $params = array();
        $params['title'] =$flim->name."-".$data['chap'];
        $params['description'] = $data['title'];
        
        // Create video metadata
        $create_response = json_encode($jwplatform_api->call('/videos/create', $params));
        $decoded = json_decode(trim($create_response), TRUE);
        $upload_link = $decoded['link'];

        $upload_response = $jwplatform_api->upload($target_file, $upload_link);

       // dd($upload_link);
        $link = $upload_response['media']['key'];
        $data['title']= $flim->name."-".$data['title'];
        $data['content'] = $link;
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
       // dd($data);
        DB::table('flim')->where('id',$data['flim_id'])->update(['updated_at'=>$data['updated_at']]); 
        DB::table('chapter')->insert($data); 
        return redirect()->route('admin.chapter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('flim')->orderBy('created_at','DESC')->get();
        $chap = DB::table('chapter')->where('id',$id)->first();
        return view('cpadmin.modules.chap.edit',['flim'=>$data,'chapter'=>$chap]);
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
        $flim = DB::table('flim')->select('name')->where('id',$data['flim_id'])->first();
        $content = DB::table('chapter')->select('content')->where('id',$id)->first();
        if (isset($data['content'])) {
            $jwplatform_api = new Jwplayer\JwplatformAPI('7O8Qgq2m', 'uT2IyjXQsc9C3ezF2noBgNEc');

            $target_file = $data['content']->getRealPath();
            $params = array();
            $params['title'] =$flim->name."-".$data['chap'];
            $params['description'] = $data['title'];
            
            // Create video metadata
            $create_response = json_encode($jwplatform_api->call('/videos/create', $params));
            $decoded = json_decode(trim($create_response), TRUE);
            $upload_link = $decoded['link'];

            $upload_response = $jwplatform_api->upload($target_file, $upload_link);
            $link = $upload_response['media']['key'];
            $data['content'] = $link;
        } else {
            $data['content'] = $content->content;
        }
        
        $data['updated_at'] = new DateTime();
       // dd($data);
        DB::table('flim')->where('id',$data['flim_id'])->update(['updated_at'=>$data['updated_at']]); 
        DB::table('chapter')->where('id',$id)->update($data); 
        return redirect()->route('admin.chapter.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('chapter')->where('id',$id)->delete();

        return redirect()->route('admin.chapter.index');
    }
}
