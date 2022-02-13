<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;

class ParchmentController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $exams = Exam::all()->where('user_id', $id)->toArray();
        return array_reverse($exams);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $exam = new Exam ([
            'user_id' => $id,
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'applicant' => $request->input('applicant'),
            'content' => $request->input('content'),
            'date' => $request->input('date')
        ]);
        $exam->save();
        return response()->json("Lembrete de exame criado.");
    }

    public function show ($id) 
    {
        $exam = Exam::find($id);
        return response()->json($exam);
    }

    public function update ($id, Request $request) 
    {
        $exam = Exam::find($id);
        $exam->update($request->all());
        return response()->json("Lembrete de exame atualizado.");
    }
    public function destroy ($id) 
    {
        $exam = Exam::find($id);
        $exam->delete();
        return response()->json("Lembrete de exame deletado.");
    }

}