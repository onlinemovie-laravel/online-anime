<?php
 namespace App\Http\ViewComposers;
 use Illuminate\Support\Facades\DB;
 use Datetime;
 use Illuminate\View\View;

 class MovieComposer
 {
     public $movieList ;
<<<<<<< HEAD
     public $year;
=======
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {  
        
<<<<<<< HEAD
         $this->movieList =  DB::table('category')->orderBy('id','DESC')->get();
         $this->year = DB::table('flim')->select('year')->orderBy('year','DESC')->distinct()->get();
=======
        $this->movieList =  DB::table('category')->orderBy('id','DESC')->get();
        
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
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
<<<<<<< HEAD
        $view->with('listyear', end($this->year));
=======
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
     //   $view->with(['listcategory'=>$this->movieList]);
     }
 }