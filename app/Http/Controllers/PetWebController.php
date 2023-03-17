<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetWebController extends Controller
{
    //create pets
    public function create()
    {
        return view ('register');
    }

    public function store(Request $r)
    {
        try {
            $r->validate([
                'name_user' => 'required|string',
                'cell_phone'=> 'required|integer',
                'pet_type'=> 'required|string',
                'pet_name' => 'required|string',
                'microchip' => 'required|integer|unique:pet',
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
            $pet ->save();
            return $this->list();
        } catch (\Exception $e) {
            throw $e;
            // unique:posts
        }
    }

    //show all pets
    public function list()
    {
        $data['pets'] = Pet::all();
        return view('home',$data);
    }

    //search data to update of pet
    public function update($id, Request $r)
    {
        $pet = Pet::find($id);
        return view('update',["pet" => $pet]);
    }

    //update pet data
    public function put($id, Request $r)
    {
        try {
            $pet = Pet::find($id);
            $pet->update($r->all());
            $pet->save();
            return $this->list();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    //delete pet data
    public function delete($id,Request $r)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return $this->list();
    }
}
