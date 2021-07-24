<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Customer;

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
    public function __invoke(Request $request, $customerName = null)
    {
//        $customers = DB::table('customers')->get();
//        $customers = Customer::get();
//        return response()->json($customers);
        if (isset($customerName)) {
            $customers = Customer::where('fullname', 'LIKE', '%' . $customerName . '%')->get();
        } else {
            $customers = Customer::get();
        }
        return view('customers.index', ['customers' => $customers]);
    }
}
