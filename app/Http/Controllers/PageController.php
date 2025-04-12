<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageBlock;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages',
            'blocks' => 'required|json',
        ]);

        $page = Page::create($request->only('title', 'slug'));

        $blocks = json_decode($request->blocks, true);
        foreach ($blocks as $index => $block) {
            $page->blocks()->create([
                'type' => $block['type'],
                'settings' => $block['settings'],
                'order' => $index,
            ]);
        }

        return redirect()->route('pages.show', $page->slug);
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->with('blocks')->firstOrFail();
        return view('pages.show', compact('page'));
    }

    public function index()
{
    $pages = Page::all();
    return view('pages.index', compact('pages'));
}

public function edit(Page $page)
{
    return view('pages.edit', compact('page'));
}

public function update(Request $request, Page $page)
{
    $request->validate([
        'title' => 'required',
        'slug' => 'required|unique:pages,slug,' . $page->id,
        'blocks' => 'required|json',
    ]);

    $page->update($request->only('title', 'slug'));

    // Delete old blocks
    $page->blocks()->delete();

    // Save new blocks
    $blocks = json_decode($request->blocks, true);
    foreach ($blocks as $index => $block) {
        $page->blocks()->create([
            'type' => $block['type'],
            'settings' => $block['settings'],
            'order' => $index,
        ]);
    }

    return redirect()->route('pages.index')->with('success', 'Page updated.');
}

public function destroy(Page $page)
{
    $page->delete();
    return redirect()->route('pages.index')->with('success', 'Page deleted.');
}
}
