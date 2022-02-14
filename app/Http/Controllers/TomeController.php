<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tome;

class TomeController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $tomes = Tome::all()->where('user_id', $id)->toArray();
        return array_reverse($tomes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $tome = new Tome ([
            'user_id' => $id,
            'title' => $request->input('title'),
        ]);
        $tome->save();
        return response()->json("Tomo criado.");
    }

    public function show ($id) 
    {
        $tome = Tome::find($id);
        return response()->json($tome);
    }

    public function update ($id, Request $request) 
    {
        $tome = Tome::find($id);
        $tome->update($request->all());
        return response()->json("Tomo atualizado.");
    }
    public function destroy ($id) 
    {
        $tome = Tome::find($id);
        $tome->delete();
        return response()->json("Tomo deletado.");
    }

}