<?php

namespace App\Http\Controllers;

use App\Models\Cabin;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\CabinStoreRequest;
use App\Http\Requests\api\v1\CabinUpdateRequest;


class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabin = Cabin::orderBy('name', 'asc')->get();
   
        return response()->json(['data' => $cabin], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CabinStoreRequest $request)
 {
        $cabin = Cabin::create($request->all());

        return response()->json(['data' => $cabin], 201);
 }


    /**
     * Display the specified resource.
     */
    public function show(Cabin $cabin)
 {
        return response()->json(['data' => $cabin], 200);
 }

    /**
     * Update the specified resource in storage.
     */
    public function update(CabinUpdateRequest $request, Cabin $cabin)
 {
        $cabin->update($request->all());

        return response()->json(['data' => $cabin], 200);
 }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cabin $cabin)
 {
        $cabin->delete();
        return response(null, 204);
 }
}
