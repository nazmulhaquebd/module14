<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function storeuser(Request $request){
        $name = $request->input('name');
        return $name;


    }
}

 function UserAgent(Request $request)
{
$userAgent = $request->header('User-Agent');
return $userAgent;

}

function endpoint(Request $request)
{
    $page = $request->query('page',null);
    if($page !== null){
    return $page;
    }else{
    return;
    }
    }

function json()
{
    $data = [
        'name' => 'John Doe',
        'age' => 25
    ];

    $response = [
        'message' => 'Success',
        'data' => $data
    ];

    return response()->json($response,$data);
}


function uploadAvatar(Request $request)
{
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename, 'public');
        return true;
    }
}


 function SetCookie(Request $request)
{
    $rememberToken = $request->cookie('remember_token', null);
    return $rememberToken;

}


