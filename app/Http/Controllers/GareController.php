<?php

namespace App\Http\Controllers;

use App\Models\Gare;
use Illuminate\Http\Request;

class GareController extends Controller
{
    public function GetGares()
    {
        $gares = Gare::all();
        return response()->json(["data" => $gares], 200);
    }
    
   
    public function AddGare(Request $request)
    {
        $gare= Gare::create([
            'nom_gare' => $request->nom_gare,
            'lieu' => $request->lieu,
            'address' => $request->address
        ]);

        return response()->json(["data"=>$gare],200);

    }


    public function EditGare(Request $request,$id){
        $gare = Gare::find($id);
        if($gare){
            $gare->update([
            'nom_gare' => $request->nom_gare,
            'lieu' => $request->lieu,
            'address' => $request->address
            ]);
            return response()->json(["data"=>$gare],200);
        }else{
            return response()->json(["message"=> "gare not found"],404);
        }
    }

    public function DeleteGare($id){
        $gare = Gare::find($id);
        if($gare){
            $gare->delete(); 
            return response()->json(["message"=> "gare Deleted with Success"],200);
        }else{
            return response()->json(["message"=> "gare not found"],404);
        }
    }
}
