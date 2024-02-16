<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $idPetcontributor = $request->user()->id;
        $feedbacks = Feedback::with('user')->latest()->where('id_pengadopsi', $idPetcontributor)->paginate(5);
        $guard = Config::get('auth.defaults.guard');

        if ($guard == 'web') {
            return view('admin.pets.index', compact('feedbacks'));
        } elseif ($guard == 'petcontributor') {
            return view('petcontributor.feedbacks.index', compact('feedbacks'));
        }
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('pet');
    //     if (empty($query)) {
    //         $rekomendasiHewan = Pet::inRandomOrder()->limit(10)->get();
    //         return view('search-results', ['rekomendasiHewan' => $rekomendasiHewan]);
    //     }

    //     $results = Pet::where('nama', 'LIKE', '%' . $query . '%')->get();

    //     return view('search-results', ['query' => $query, 'results' => $results]);
    // }

    public function create()
    {
        // return view('petcontributor.feedbacks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'message' => 'required',
            'id_pengadopsi' => 'required',
            'id_penyedia' => 'required',
        ]);

        $feedback = Feedback::create($request->all());
        return redirect()->route('pets.index')->with('success', 'Feedback created successfull');
    }

    public function show(Feedback $feedback)
    {
        // return view('feedbacks.show', compact('feedback'));
    }

    public function edit(Feedback $feedback)
    {
        // return view('feedbacks.edit', compact('feedback'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'rating' => 'required',
            'message' => 'required',
            'id_pengadopsi' => 'required',
            'id_penyedia' => 'required',
        ]);

        $feedback->update($request->all());
        return redirect()->route('feedbacks.index')->with('success', 'Feedback updated successfully');
    }

    // public function destroy(Feedback $feedback)
    // {
    //     $feedback->delete();
    //     return redirect()->route('feed$feedbacks.index')->with('success', 'Feedback deleted successfully');
    // }
}
