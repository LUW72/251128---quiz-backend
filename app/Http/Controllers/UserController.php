<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function savePoints(Request $request)
    {
        $name = $request->name;
        $points = $request->points;

        $user = User::where('name', $name)->first();


        $user->points = $points;
        $user->save();

        return response()->json($user, 200);
    }


    public function topList()
    {
        $top = User::orderBy('points', 'desc')
                ->limit(10)
                ->get(['name', 'points']);

        return response()->json($top);
    }

}
