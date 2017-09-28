<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function home()
    {
        return view('validate');
    }

    public function arrayvalidate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email.*' => 'required|email'
            ], [
            'email.*' => 'this email must be formated property.'
            ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        return 'all right, invite these fools.';
    }

    public function invite(Request $request)
    {
        $this->validate($request, [
            'email.*' => 'required|email'
            ], [
            'email.*' => 'this email must be formated property'
            ]);
        return 'checked ok, invite these fools.';
    }
}

