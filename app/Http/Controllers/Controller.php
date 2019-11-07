<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function __construct(Guard $auth)
    // {
    //     $this->currentUser = $auth->user();
    // }
    function profile(){
        $auth = Auth::user();
        return view([
            'layouts.app',
        ],compact('auth'));
    }

    // public function __construct()
    // {
    //     $this->middleware([
    //         'role:admin',
    //     ]);
    // }
}
