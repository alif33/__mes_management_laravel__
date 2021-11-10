<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        return District::all();
    }

    public function find($id)
    {
        return $id;
    }


    // public function store(Request $request)
    // {
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'category_name' => 'required|string|between:2,30|unique:categories',
    //         ]
    //     );

    //     if ($validator->fails()) {
    //         return response()->json(
    //             [$validator->errors()],
    //             422
    //         );
    //     }

    //     $category = Category::create(
    //         array_merge(
    //             $validator->validated()
    //         )
    //     );
    // }

    // public function update(Request $request, $id)
    // {
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'category_name' => 'required|string|between:2,30|unique:categories',
    //         ]
    //     );

    //     if ($validator->fails()) {
    //         return response()->json(
    //             [$validator->errors()],
    //             422
    //         );
    //     }

    //     $category = Category::findOrFail($id)->update(
    //         array_merge(
    //             $validator->validated()
    //         )
    //     );
    // }
    
    // public function destory($id)
    // {
    //    $category = Category::findOrFail($id);

    //    if($category)
    //    {
    //        $category->delete();
    //        return response()->json(
    //             ['message'=>'Category deleted successfully'],
    //             422
    //         );
    //    } 
    // }
}
