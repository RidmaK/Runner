<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Runner;
use Illuminate\Http\Request;

class FormDataController extends Controller
{

    public function show($id)
    {
       $runner = Runner::with(['lastRuns'])->findOrFail($id);

       $lastRuns = $runner->lastRuns->map(function ($lastrun){
            return [
                "id"=> $lastrun->id,
                "runner_id"=> $lastrun->runner_id,
                "discription"=> $lastrun->discription,
            ];
        });

        $data =  [
            "runner_name" => $runner->name,
            "age" => $runner->age,
            "sex" => $runner->sex,
            "color" => $runner->color,
            "last_runs" => $lastRuns
        ];


       return response()->json([
            "success" => true,
            'data'=> $data,
            "status" =>200
        ],200);
    }

}
