<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
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
        return redirect()->action('App\Http\Controllers\ServiceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return Application|Factory|View
     */
    public function show(Service $service)
    {
//        dd($service);
        return view('services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $services
     * @return Response
     */
    public function edit(Service $services)
    {
        return response('kjkj');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Service $services
     * @return Response
     */
    public function update(Request $request, Service $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $services
     * @return Response
     */
    public function destroy(Service $services)
    {
        //
    }
}
