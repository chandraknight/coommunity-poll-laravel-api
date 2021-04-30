<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poll;
use Illuminate\Support\Facades\Validator;

class PollsController extends Controller{
    //
    public function index(){
        return response()->json(Poll::all(),200);
    }

    public function show($id){
        return response()->json(Poll::findOrFail($id),200);
    }

    public function store(Request $request){
        $rules=[
            'title'=>'required|max:255,'
        ];
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $poll=Poll::Create($request->all());
        return response()->json($poll,201);
    }

    public function update(Request $request,Poll $poll){
        $poll->update($request->all());
return response()->json($poll,200);
    }

    public function destory(Request $request,Poll $poll){
        $poll->delete();
        return response()->json(null, 204);
    }

    public function errors()
    {
        return response()->json(['meg'=>'Some error occured while processing your request'], 501);
    }
}
