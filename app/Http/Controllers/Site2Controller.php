<?php

namespace App\Http\Controllers;

class Site2Controller
{

    function home(){

        $name = 'Hamoo';
        $age = 22 ;
     /*   foreach($data as $d){
            echo $d . '<br>';
        }
        echo $name;
        */
      //  return view('site2' )->with('name' , $name);
      //  return view('site2', compact('name' , 'age'));
          return view('site2', ['name' => $name , 'age' => $age]);
    }


    public function about()
    {
        return 'site2 about page' ;
    }

    public function services()
    {
        return 'site2 services page' ;
    }

    public function contacts()
    {
        return 'site2 contacts page' ;
    }
    public function singel_services( $name1)
    {
        return 'singel_services page ' .  $name1;
    }


}
