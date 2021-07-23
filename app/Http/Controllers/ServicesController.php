<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $services = DB::table('services')->get();
        return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        DB::table('services')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return redirect()->action('App\Http\Controllers\ServicesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Services $services
     * @return Application|Factory|View
     */
    public function show(Services $services)
    {
//        $services = DB::table('services')->get();

        dd($services);
//        return view('services.show')
//            ->with('services', $services);
//        return view('services.show', ['services' => $services]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Services $services
     * @return Response
     */
    public function edit(Services $services)
    {
        return response('kjkj');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Services $services
     * @return Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Services $services
     * @return Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
