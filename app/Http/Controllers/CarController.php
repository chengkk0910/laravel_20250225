<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = DB::table('users')->get();
        // $data = DB::table('cars')->get();
        $data = Car::get();
        // dd($data);
        // dd($data);

        return view('car.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('car controller create');
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        $data = new Car;

        // $data->name = $request->name;
        // $data->mobile = $request->mobile;

        $data->name = $input['name'];
        $data->mobile = $input['mobile'];

        $data->save();

        return redirect()->route('cars.index');
        // return redirect('/cars');
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
        // $url = route('cars.edit', ['car' => $id]);
        // dd($url);
        // dd("hello edit $id");

        // get fetchAll
        // first fetch
        $data = Car::where('id', $id)->first();
        // dd($data);

        return view('car.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except('_token', '_method');
        $data = Car::where('id', $id)->first();
        // $data = Car::find($id);

        // "name" => "cat"
        // "mobile" => "0933"

        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("hello destroy $id");
        $data = Car::where('id', $id)->first();
        $data->delete();
        return redirect()->route('cars.index');
    }

    public function excel()
    {
        dd('hello car controller excel');
    }

    public function sayHello()
    {
        dd('hello kai');
    }
}
