<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Runner;
use Illuminate\Http\Request;

class FormDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $runnerId = Runner::findOrFail($id);


            $runners = Runner::with(['lastRun'])->where('id',$runnerId->id)->get();

             $runners->transform(function ($runner)
             {
                $last_runs = $runner->lastRun->map(function ($lastrun){
                    return [
                      "id"=> $lastrun->id,
                      "runner_id"=> $lastrun->runner_id,
                      "discription"=> $lastrun->discription,
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
