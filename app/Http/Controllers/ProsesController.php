<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function store(Request $request)
    {
        $a=$request->a;
        $b=$request->b;
        $op=$request->op;

        if($op=='+'){
            $hasil=$a+$b;

        }elseif($op=='-'){
            $hasil=$a-$b;

        }elseif($op=='x'){
            $hasil=$a*$b;

        }elseif($op=='/'){
            if($b !=0 ){
                $hasil=$a/$b;
            }else{
                $hasil="tidak boleh membagi dengan 0";
            }
        }else{
            $hasil="";
            return view('kalkulator.index',compact('hasil'));
        }
        return view('kalkulator.hasil',compact('hasil'));
    }
}
