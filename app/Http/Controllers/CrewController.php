<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'data' => Crew::all(),
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
        $crew = new Crew;
            
        $crew->name =$request->name;
        $crew->en_description = $request->en_description;
        $crew->fr_description = $request->fr_description;
        $crew->en_grade = $request->en_grade;
        $crew->fr_grade = $request->fr_grade;
        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $destination->image = 'storage/'.$filename;
            
        }

        $crew->save();

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
            'data'=>Crew::where('id',$id)->first(),
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return [
            'data'=>Crew::where('id',$id)->first(),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crew = Crew::where('id',$id)->first();

        $request->validate([

            'name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            'en_grade'=> 'required',
            'fr_grade'=> 'required',
            
        ]);
        
        
        $crew->name = $request->input('name');
        $crew->en_description = $request->input('en_description');
        $crew->fr_description = $request->input('fr_description');
        $crew->en_grade = $request->input('en_grade');
        $crew->fr_grade = $request->input('fr_grade');
        
        //$crew->image = 'tato';
        if($request->file('image')){
            $filename = $request->file('image')->store('img','public');
            $crew->image = 'storage/'.$filename;
        }

        $crew->save();
        
        $response ='axel est trop fort!!!';

        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crew = Crew::where('id',$id)->first();
        $path = explode('/',$crew->image);
        array_splice($path,0,1);
        print_r($path);
        $image = implode('/',$path);
        
        if(Storage::disk('public')->exists($image)){
            Storage::disk('public')->delete($image);
        }
        
        
        $crew->delete();
    }
}
