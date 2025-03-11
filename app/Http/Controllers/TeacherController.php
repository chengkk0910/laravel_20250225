<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = DB::table('users')->get();
        // $data = DB::table('teachers')->get();
        $data = Teacher::get();
        // dd($data);
        // dd($data);

        return view('teacher.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('teacher controller create');
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        $data = new Teacher;

        // $data->name = $request->name;
        // $data->mobile = $request->mobile;

        $data->name = $input['name'];
        $data->mobile = $input['mobile'];

        $data->save();

        return redirect()->route('teachers.index');
        // return redirect('/teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $url = route('teachers.edit', ['teacher' => $id]);
        // dd($url);
        // dd("hello edit $id");

        // get fetchAll
        // first fetch
        $data = Teacher::where('id', $id)->first();
        // dd($data);

        return view('teacher.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except('_token', '_method');
        $data = Teacher::where('id', $id)->first();
        // $data = Teacher::find($id);

        // "name" => "cat"
        // "mobile" => "0933"

        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("hello destroy $id");
        $data = Teacher::where('id', $id)->first();
        $data->delete();
        return redirect()->route('teachers.index');
    }

    public function excel()
    {
        dd('hello teacher controller excel');
    }

    public function sayHello()
    {
        dd('hello kai');
    }
}