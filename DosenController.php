<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return Dosen::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosen',
            'name' => 'required',
            'fakultas' => 'required',
        ]);

        $dosen = Dosen::create($request->all());
        return response()->json($dosen, 201);
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return response()->json($dosen, 200);
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return response()->json(['message' => 'Dosen deleted'], 200);
    }
}