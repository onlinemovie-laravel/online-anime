<?php
 namespace App\Http\ViewComposers;
 use Illuminate\Support\Facades\DB;
 use Datetime;
 use Illuminate\View\View;

 class MovieComposer
 {
     public $movieList ;
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {  
        
        $this->movieList =  DB::table('category')->orderBy('id','DESC')->get();
        
     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
        $view->with('listcategory', end($this->movieList));
     //   $view->with(['listcategory'=>$this->movieList]);
     }
 }