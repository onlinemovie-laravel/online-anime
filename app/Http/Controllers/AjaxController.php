<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function loadallflim(Request $req ){
        $data = [];
        
        $data = $req->arr ;
        $startposition = ($req->num * 5) - 5;
        $endposition = $startposition + 5;
        if ($endposition > count($data)) {
           $endposition = count($data);
        } else {
            # code...
        }
        
        $xhmtl = null;
        for ($i = $startposition; $i < $endposition ;$i++ ){
         $xhmtl.=   '<li>
         <a class="movie-item m-block" title="'.$data[$i]['subname'].'" href="'.Route('page.inforpage',['id' =>$data[$i]['id']]).'">
             <div class="block-wrapper">
                 <div class="movie-thumbnail ratio-box ratio-3_4">
                     <div class="public-film-item-thumb ratio-content" style="background-image:url('.$data[$i]['image'].')"></div>
                 </div>
                 <div class="movie-meta">
                     <div class="movie-title-1">'.$data[$i]['name'].'</div>
                     <span class="fbcom-left">89</span><span class="viewed-right">'.$data[$i]['total_views'].'</span><span class="ribbon">10/'.$data[$i]['total_chap'].' tập</span>
                 </div>
             </div>
         </a>
     </li>';
        }
     
        return $xhmtl;
    }
}
