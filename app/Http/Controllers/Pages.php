<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStore as StoreRequest;
use App\Http\Requests\PageUpdate as UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Pages extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(StoreRequest $request)
    {
        //dd($request);
        $fields = $request->validated();
        $page = Page::create($fields);
        return redirect()->route('admin.pages.show', $page->id);
    }

    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdateRequest $request, Page $page)
    {
        $fields = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/pages');
            $fields['image'] = basename($path);
            $page->update($fields);
            return redirect()->route('admin.pages.show', $page->id);
        }
    }

    public function destroy(Page $page)
    {
        Page::destroy($page->id);
        return redirect()->route('admin.pages.index');
    }
}
