<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

//use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ShowCustomersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $customers = DB::table('customers')->get();
//        return response()->json($customers);
        return view('customers.index', ['customers' => $customers]);
    }
}
