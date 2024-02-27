<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'data' => Destination::all(),
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
        //$data = $request->validate([]);
        $destination = new Destination;
            
        $destination->en_name = $request->en_name;
        $destination->fr_name =$request->fr_name;
        $destination->en_description = $request->en_description;
        $destination->fr_description = $request->fr_description;
        $destination->en_distance = $request->en_distance;
        $destination->fr_distance = $request->fr_distance;
        $destination->en_duration = $request->en_duration;
        $destination->fr_duration = $request->fr_duration;
        

        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $destination->image = '/storage/'.$filename;
            
        }

        $destination->save();

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
            'data'=>Destination::where('id',$id)->first(),
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return [
            'data'=>Destination::where('id',$id)->first(),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->input('en_name'));
        $destination = Destination::where('id',$id)->first();

        $request->validate([

            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            'en_distance'=> 'required',
            'fr_distance'=> 'required',
            'en_duration'=> 'required',
            'fr_duration'=> 'required',
            
        ]);
        
        $destination->en_name = $request->input('en_name');
        $destination->fr_name = $request->input('fr_name');
        $destination->en_description = $request->input('en_description');
        $destination->fr_description = $request->input('fr_description');
        $destination->en_distance = $request->input('en_distance');
        $destination->fr_distance = $request->input('fr_distance');
        $destination->en_duration = $request->input('en_duration');
        $destination->fr_duration = $request->input('fr_duration');
        //$destination->image = 'tato';
        if($request->file('image')){
            $filename = $request->file('image')->store('img','public');
            $destination->image = '/storage/'.$filename;
        }

        $destination->save();
        
        $response ='axel est trop fort!!!';

        return response()->json($response,200);
    }

    public function delete(string $id){
        // 
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destination::where('id',$id)->first();
        $path = explode('/',$destination->image);
        array_splice($path,0,1);
        $image = implode('/',$path);
        
        if(Storage::disk('public')->exists($image)){
            Storage::disk('public')->delete($image);
        }
        
        
        $destination->delete();
    }
}
