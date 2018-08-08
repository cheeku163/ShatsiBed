<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ServiceRequest;
use App\Company;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {

        $orders = ServiceRequest::all();
        $popular = Company::orderBy('views','DESC')->take(4)->get();

        View::share ( 'orders',$orders );
        View::share ( 'popular',$popular );
    }
}
