<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    
public function store(Request $request)
{
    $request->validate([
        'nama'       => 'required|max:10',
        'email'      => ['required', 'email'],
        'pertanyaan' => 'required|max:300|min:8',
    ], [
        'nama.required'       => 'Nama tidak boleh kosong',
        'nama.max'            => 'Nama maksimal 10 karakter',
        'email.required'      => 'Email tidak boleh kosong',
        'email.email'         => 'Email tidak valid',
        'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        'pertanyaan.max'      => 'Pertanyaan maksimal 300 karakter',
        'pertanyaan.min'      => 'Pertanyaan minimal 8 karakter',
    ]);

    $data = [
        'nama'       => $request->nama,
        'email'      => $request->email,
        'pertanyaan' => $request->pertanyaan,
    ];

    return redirect()->route('home')->with('info', $data);
}


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
