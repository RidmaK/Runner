<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Runner;

class FormDataController1 extends Controller
{
    public function show($runnerId)
    {

        try {

        $runnerId = Runner::findOrFail($runnerId);


        $runners = Runner::with(['lastRun'])->where('id',$runnerId->id)->get();

         $runners->transform(function ($runner)
         {
            $last_runs = $runner->lastRun->map(function ($lastrun){
                return [
                  "id"=> $lastrun->id,
                  "runner_id"=> $lastrun->runner_id,
                ];
              });
            return [
                  "runner_name" => $runner->name,
                  "age" => $runner->age,
                  "sex" => $runner->sex,
                  "color" => $runner->color,
                  "last_runs" => $last_runs
            ];
         });


        return response()->json([
            "success" => true,
            'data'=>$runners,
            "status" =>200
        ],200);

        } catch (\Exception $e) {
            return response()->json(['message'=>'Runner ID not found!'], 404);
        }
    }
}
