<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutor.index',compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutor = new Tutor();
        $tutor->name = $request->name;
        $tutor->address = $request->address;
        $tutor->mobile = $request->mobile;

        if($request->hasFile('photo')){
            $fileName = $request->photo;
            $newName = time(). '_' .$request->name. '_' .$fileName->getclientOriginalName();
            $image_resize = Image::make($fileName->getRealPath());
            $image_resize->resize(800,600);
            $image_resize->save(public_path('tutor/' .$newName));
            $tutor->photo = 'tutor/' .$newName;
        }

        $tutor->save();
        $request->session()->flash('message','Added Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('tutor.edit',compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tutor = Tutor::find($id);
        $tutor->name = $request->name;
        $tutor->address = $request->address;
        $tutor->mobile = $request->mobile;

        if($request->hasFile('photo')){
            $fileName = $request->photo;
            $newName = time(). '_' .$request->name. '_' .$fileName->getClientOriginalName();
            $image_resize = Image::make($fileName->getRealPath());
            $image_resize->resize(800,600);
            $image_resize->save(public_path('tutor/' .$newName));
            $tutor->photo = 'tutor/' .$newName;
        }

        $tutor->update();
        $request->session()->flash('message', 'Updated Successfully.');
        return redirect()->back;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}