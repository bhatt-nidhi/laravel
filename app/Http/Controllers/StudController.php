<?php

namespace App\Http\Controllers;

use App\Models\stud;
use Illuminate\Http\Request;

class StudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=stud::paginate(25);
        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name' => 'required'
        ]);
        $data=new stud();
        $data->name=$request->name;
        $data->password=$request->password;
        $data->city=$request->city;
        // $data=stud::create()->all();
        $data->save();
        return redirect()->route('hello.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(stud $stud,$id)
    {
        // $data=stud::find($id);
        // return view('user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stud $stud,$id)
    {
        $data=stud::find($id);
        return view('user.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stud $stud,$id)
    {
        $data=stud::find($id);
        $data->name=$request->name;
        $data->password=$request->password;
        $data->city=$request->city;
        $data->save();
        return redirect()->route('hello.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stud $stud,$id)
    {
        $data=stud::find($id);
        $data->delete();
        return redirect()->route('hello.index');
    }
    public function restore(stud $stud,$id)
    {
        $data=stud::onlyTrashed($id);
        $data->restore();
        return redirect()->route('hello.index');
    }
    public function trashed()

    {
        $data=stud::onlyTrashed()->paginate(25);
        return view('user.trashed',compact('data'));
    }
    public function permenantdelete(stud $stud,$id)
    {
        $data=stud::onlyTrashed($id);
        $data->forceDelete();
        return redirect()->route('hello.index');
    }
}



