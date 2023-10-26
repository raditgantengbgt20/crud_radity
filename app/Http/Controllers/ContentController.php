<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = content::all();
        return view('contents.index', compact('contents'));
    }

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Content::create($request->all());

        return redirect()->route('contents.index')->with('success', 'Konten berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $content = Content::findOrFail($id);
        return view('contents.show', compact('content'));
    }

    public function edit(string $id)
    {
        $content = Content::findOrFail($id);
        return view('contents.edit', compact('content'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $content->update($request->all());

        return redirect()->route('contents.index')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->route('contents.index')->with('success', 'Kontenberhasil dihapus.');
    }
}