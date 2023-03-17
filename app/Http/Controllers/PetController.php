<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    //create pets
    public function create(Request $r)
    {
        try {
            $r->validate([
                'name_user' => 'required|string',
                'cell_phone'=> 'required|integer',
                'pet_type' => 'required|string',
                'pet_name' => 'required|string',
                'microchip' => 'required|integer',
                'age' => 'integer',
                'weight' => 'integer',
                'height' => 'integer',
                'race' => 'required|string',
                'illness' => 'required|string',
            ]);
            $pet =  Pet::create([
                'name_user' => $r->name_user ,
                'cell_phone' => $r->cell_phone,
                'pet_type' => $r->pet_type,
                'pet_name' => $r->pet_name,
                'microchip' => $r->microchip,
                'age' => $r->age,
                'weight' => $r->weight,
                'height' => $r->height,
                'race' => $r->race,
                'illness' => $r->illness,
            ]);
            return response()->json(['pet' => $pet]);
        } catch (\Exception $e) {
            return response()->json(['message'=> $e->getMessage()],400);
        }
    }

    //show all pets
    public function list()
    {
        return response()->json(['pets' => Pet::all()]);
    }

    //show a pet
    public function show($id, Request $r)
    {
        $pet = Pet::find($id);
        return response()->json(['pet' => $pet]);
    }

    //update pet data
    public function update($id, Request $r)
    {
        try {
            $pet = Pet::find($id);
            $pet->update($r->all());
            $pet->save();
            return response()->json(['message' => 'the pet data has been successfully updated']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'There was an error updating pet data']);
            // return response()->json(['message'=> $e->getMessage()]);
        }
    }

    //delete pet data
    public function delete(Request $r)
    {
        $pet = Pet::find($r->id);
        $pet->delete();
        return response()->json(['message'=> 'pet data deleted successfully']);
    }
}
