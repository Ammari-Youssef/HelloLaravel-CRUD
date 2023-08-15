<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

    // public static function getdata()
    // {
    //     return [
    //         ['id' => 1, 'name' => "Asus", "origin" => "Spain", 'price' => 1500],
    //         ['id' => 2, 'name' => "LG", "origin" => "Korea", 'price' => 999],
    //         ['id' => 3, 'name' => "Dell", "origin" => "USA", 'price' => 599],
    //         ['id' => 4, 'name' => "Lenovo", "origin" => "Germany", 'price' => 499],
    //         ['id' => 5, 'name' => "HP", "origin" => "France", 'price' => 399],
    //     ];
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('computers.index', ['computers' => Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("computers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'computer-name' => 'required',
                'computer-origin' => 'required',
                'computer-price' => 'required |integer',
            ]
        );

        $c = new Computer();

        $c->name = strip_tags($request->input('computer-name'));
        $c->origin = strip_tags($request->input('computer-origin'));
        $c->price = strip_tags($request->input('computer-price'));

        $c->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
        /* $computers = self::getdata();
        $index = array_search($computer, array_column($computers, 'id'));
        return view("computers.show", [ 'computer' => $computers[$index] ]);
        if ($index === false) {
            abort(404);
        }*/

        return view("computers.show", [
            'computer' =>
            Computer::findorFail($computer)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {
        //
        return view("computers.edit", ["computer" => Computer::findorFail($computer)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $request->validate(
            [
                'computer-name' => 'required',
                'computer-origin' => 'required',
                'computer-price' => 'required |integer',
            ]
        );

        $to_updated = Computer::findorfail($computer);

        $to_updated->name = strip_tags($request->input('computer-name'));
        $to_updated->origin = strip_tags($request->input('computer-origin'));
        $to_updated->price = strip_tags($request->input('computer-price'));

        $to_updated->save();

        return redirect()->route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
        //
        $to_delete = Computer::findorfail($computer);

        $to_delete->delete();
        
        return redirect()->route('computers.index');
    }
}
