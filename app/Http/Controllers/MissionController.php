<?php

namespace App\Http\Controllers;
use App\Mission;
use Illuminate\Http\Request;
use App\Http\Resources\MiisionResource;

 
class MissionController extends Controller
{
    public function index()
    {
        return Mission::all();
    }

    public function show(Mission $mission)
    {
        return $mission;
    }

    public function store(Request $request)
    {
        $mission = Mission::create($request->all());

        return response()->json($mission, 201);
    }

    public function update(Request $request, Mission $mission)
    {
        $mission->update($request->all());

        return response()->json($mission, 200);
    }

    public function delete(Mission $mission)
    {
        $mission->delete();

        return response()->json(null, 204);
    }
}