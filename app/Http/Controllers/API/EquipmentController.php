<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreequipmentRequest;
use App\Http\Requests\UpdateequipmentRequest;
use App\Models\equipment;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\isNull;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = equipment::all();
        return response()->json($equipment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreequipmentRequest $request)
    {
        $equipment = new equipment();
        $equipment->fill($request->all());
        $equipment->save();
        return response()->json($equipment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = equipment::find($id);
        if (is_null($equipment)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        return response()->json($equipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateequipmentRequest $request, $id)
    {
        $equipment = equipment::find($id);
        if (is_null($equipment)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        $equipment->fill($request->all());
        $equipment->save();
        return response()->json($equipment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipment = equipment::find($id);
        if (is_null($equipment)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        equipment::destroy($id);
        return response()->json(["message" => "Rekord törlése sikeres"], 204);
    }
}
