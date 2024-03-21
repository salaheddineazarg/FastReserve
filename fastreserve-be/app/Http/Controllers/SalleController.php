<?php

namespace App\Http\Controllers;
use App\Http\Resources\SalleResource;

use Illuminate\Http\Request;
use App\Models\Salle;


class SalleController extends Controller
{
    public function index(){
        $salles = Salle::with('category')->get();

        // Return the salles as JSON response
        return SalleResource::collection($salles);;
    }
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|max:3000',
            'image' => 'required|string',
            'price' => 'required|numeric',
            'date_open' => 'required|date_format:H:i',
            'date_close' => 'required|date_format:H:i',
            'location' => 'required|string',
            'id_category' => 'required',
            'id_owner' => 'required',
        ]);

        // Create a new Salle instance
        $salle = new Salle;
        $salle->name = $request->name;
        $salle->description = $request->description;
        $salle->image = $request->image;
        $salle->price = $request->price;
        $salle->date_open = $request->date_open;
        $salle->date_close = $request->date_close;
        $salle->location = $request->location;
        $salle->id_category = $request->id_category;
        $salle->id_owner = $request->id_owner;
        $salle->save();

        return response()->json(['message' => 'Salle created successfully', 'data' => $salle], 201);
    }
    public function show($id)
    {
        $salle = Salle::with('category')->find($id);

    // Return the salle as JSON response using the SalleResource
               return new SalleResource($salle);
    }
}
