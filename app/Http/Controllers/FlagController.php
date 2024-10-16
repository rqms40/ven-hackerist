<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flags.index');
    }

    public function raffyGwapo()
    {
        return view('flags.raffy-gwapo', [
            'flags' => Flag::all()
        ]);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'flag_string' => 'required|string|max:255',
        ]);

        $correctFlag = 'VenFlag{C5ru5hNiVeN51A}';

        if ($request->flag_string === $correctFlag) {
            Flag::create([
                'name' => $request->name,
                'flag_string' => $request->flag_string,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'You have submitted the correct flag. The attackers will withhold the leak. Great job, Cyber Defense Incident Responder!',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'The flag you entered is incorrect.',
        ], 400);
    }


    /**
     * Display the specified resource.
     */
    public function show(Flag $flag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flag $flag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flag $flag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flag $flag)
    {
        //
    }
}
