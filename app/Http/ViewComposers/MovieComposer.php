<?php
 namespace App\Http\ViewComposers;
 use Illuminate\Support\Facades\DB;
 use Datetime;
 use Illuminate\View\View;

 class MovieComposer
 {
     public $movieList ;
     public $year;
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {  
        
         $this->movieList =  DB::table('category')->orderBy('id','DESC')->get();
         $this->year = DB::table('flim')->select('year')->orderBy('year','DESC')->distinct()->get();
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
        $view->with('listyear', end($this->year));
     //   $view->with(['listcategory'=>$this->movieList]);
     }
 }