<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrashStore;
use App\Models\Page;

class Trashes extends Controller
{
    public function index()
    {
        $trash = Page::onlyTrashed()->orderByDesc('deleted_at')->get();
        return view('admin.trash.index', compact('trash'));
    }

    public function restore(TrashStore $request, string $id)
    {
        $fields = $request->validated();
        $page = Page::withTrashed()->where('id', $fields['id']);
        $page->restore();
        $request->session()->flash('success', "Page №" . $fields['id'] . " was restored!");
        return redirect()->route('admin.pages.show', $fields['id']);
    }
}
