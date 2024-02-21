<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'data' => Technology::all(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $technology = new Technology;
            
        $technology->en_name = $request->en_name;
        $technology->fr_name =$request->fr_name;
        $technology->en_description = $request->en_description;
        $technology->fr_description = $request->fr_description; 

        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $technology->image = 'storage/'.$filename;
            
        }

        $technology->save();

        $response = [
            'text'=>"bien creer"
        ];

        return  response()->json($response,200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return [
            'data'=>Technology::where('id',$id)->first(),
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return [
            'data'=>Technology::where('id',$id)->first(),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $technology = Technology::where('id',$id)->first();

        $request->validate([

            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            
        ]);
        
        $technology->en_name = $request->input('en_name');
        $technology->fr_name = $request->input('fr_name');
        $technology->en_description = $request->input('en_description');
        $technology->fr_description = $request->input('fr_description');
        
        //$technology->image = 'tato';
        if($request->file('image')){
            $filename = $request->file('image')->store('img','public');
            $technology->image = 'storage/'.$filename;
        }

        $technology->save();
        
        $response ='axel est trop fort!!!';

        return response()->json($response,200);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $technology = Technology::where('id',$id)->first();
        $path = explode('/',$technology->image);
        array_splice($path,0,1);
        $image = implode('/',$path);
        
        if(Storage::disk('public')->exists($image)){
            Storage::disk('public')->delete($image);
        }
        
        $technology->delete();
    }
}
