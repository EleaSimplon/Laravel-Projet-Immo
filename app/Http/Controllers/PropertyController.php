<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    function all() {
        $properties = response()
            ->json(Property::all());
        return $properties;
    }

    function detail($id) {
        $properties =  response()
            ->json(Property::find($id));
        return $properties;
    }

    public function delete($id){
        $prop = Property::find($id);
        $prop->delete();
    }
}
