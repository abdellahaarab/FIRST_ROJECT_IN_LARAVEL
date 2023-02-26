<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    static $notes=[
        "Mohamed Alaoui" => "16",
        "Ahmed Bennani" => "14",
        "Rachida kich" => "6", 
        "Aicha Saaoudi" => "19", 
        "Noura Alaoui" => "7", 
        "Samar Rhaoussi" => "13", 
        "Aicha Siraj" => "10", 
        "Samiha Hakim" => "09", 
        "Mohamed Rami"=> "17", 
        "Sami Tazi" => "7", 
        "Noura Tazi" => "14",
        "Abdellah Aarab" => "19"
    ];
    function index(){
        return view('home');
    }
    function lesNotes(){
        arsort(self::$notes);
        return view('notes',['notes'=>self::$notes]);
    }
    
    function statistiques(){
        arsort(self::$notes);
        return view('statistiques',['notes'=> self::$notes]);
    }

    function show(Request $requete){
        $serch = $requete->input("serch");
        $oldvalue = "";
        $val = "";
        $newTable = [];
        if(isset($serch)){
            $oldvalue = $requete->input("serch");
            foreach (self::$notes as $key => $value) {
                # code...
                if(strcasecmp($key,$serch) > 0){
                    $newTable[$key] = $value;
                    $val = "";  
                }
                $val = "Nothing to show it !!";
            }
        }
        arsort($newTable);
        arsort(self::$notes);
        return view('show',[
            'notes'=> self::$notes, 
            'newTable'=>$newTable,
            'value'=>$val,
            'oldvalue'=>$oldvalue
            ] );
    }

    function decorate(){
        arsort(self::$notes);
        return view('decorate',['notes'=>self::$notes]);
    }
}
