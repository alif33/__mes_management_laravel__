<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return Home::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'home_name' => 'required|string|between:2,20',
                'division_id' => 'required|integer',
                'district_id' => 'required|integer',
                'gender' => 'required|string|between:2,10',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        $homes = Home::create(
            array_merge(
                $validator->validated()
            )
        );

        // if ($homes) {
            
        // }
    }

    // public function update(Request $request, $id)
    // {
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'division_name' => 'required|string|between:2,30',
    //         ]
    //     );

    //     if ($validator->fails()) {
    //         return response()->json(
    //             [$validator->errors()],
    //             422
    //         );
    //     }

    //     $division = Division::findOrFail($id)->update(
    //         array_merge(
    //             $validator->validated()
    //         )
    //     );
    // }
    
    // public function destory($id)
    // {
    //    $division = Division::findOrFail($id);

    //    if($division)
    //    {
    //        $division->delete();
    //        return response()->json(
    //             ['message'=>'Division deleted successfully'],
    //             422
    //         );
    //    } 
    // }

}
