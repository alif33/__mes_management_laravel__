<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DivisionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin', ['except' => ['index']]);
    // }


    public function index()
    {
        return Division::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'division_name' => 'required|string|between:2,30|unique:divisions',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        $divisions = Division::create(
            array_merge(
                $validator->validated()
            )
        );
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'division_name' => 'required|string|between:2,30',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        $division = Division::findOrFail($id)->update(
            array_merge(
                $validator->validated()
            )
        );
    }
    
    public function destory($id)
    {
       $division = Division::findOrFail($id);

       if($division)
       {
           $division->delete();
           return response()->json(
                ['message'=>'Division deleted successfully'],
                422
            );
       } 
    }
    
}
