<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poll;

class PollsController extends Controller{
    //
    public function index(){
        return response()->json(Poll::all(),200);
    }
}
