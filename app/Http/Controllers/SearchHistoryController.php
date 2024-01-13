<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use Illuminate\Http\Request;

class SearchHistoryController extends Controller
{
    //


    public function index()
    {
        $searchhistory = SearchHistory::latest()->paginate(3);
        return view('searchhistories.index', compact('searchhistorys'));
    }
    // public function create()
    // {
    //     return view('searchhistorys.create');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengadopsi' => 'required',
            'keyword' => 'required'
        ]);

        SearchHistory::create($request->all());
        return redirect()->route('searchhistories.index')->with('success', 'searchhistory created successfull');
    }

    public function destroy(SearchHistory $searchhistory)
    {
        $searchhistory->delete();
        return redirect()->route('searchhistories.index')->with('success', 'searchhistory deleted successfully');
    }
}
