<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
Use App\RDV;
use View;
class rdvImpressionController extends Controller
{
    public function print($id){
    $data1=  RDV::find($id);
    $data = array(
        'object'=>$data1->object,
         'date'=>$data1->date,
         'time'=>$data1->time,
         'created_at'=>$data1->created_at,
         'id'=>$data1->id,
         'updated_at'=>$data1->updated_at,
        
        
        );
    /*
    $data1->object=$data->object;
    $data1->date=$data->date;
    $data1->time=$data->time;
    $data1->id=$data->id;*/
    //dd($data);
    $pdf = PDF::loadView('oneRdv', $data);
    return $pdf->save(storage_path().'_filename.pdf');  
    }
}
