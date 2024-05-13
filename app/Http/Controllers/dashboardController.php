<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnels = personnel::paginate(5);
        
        return view('dashboard', compact('personnels'));
    
        
      //  return view('dashboard', ['id' => '1',
      //  'nom' => 'ouedraogo',
      //  'prenom' => 'bonaventure',
      //  'telephone' => '61125888']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajoutPersonnel',['personnel' => new Personnel() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
        ]);
        
        // Insert data in the 'pages' table
			$query = Personnel::create($validated);
			if ($query) {
				return redirect()->route('test')->with('success');
			} else {
				return redirect()->back()->with('error', 'Adding a new page failed');
			}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
