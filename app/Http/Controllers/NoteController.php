<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\NoteStoreRequest;
use App\Http\Requests\NoteUpdateRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Http\Request\NoteStoreRequest;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use Illuminate\View\View;



class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ValidatesRequests;
    public function index(): View
    {
        $notes = Note::orderBy('id','asc')->paginate(5);
          
        return view('notes.index', compact('notes'));
                    // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notes.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteStoreRequest $request)
    {   
        
        $validatedData = $request->validated();
    
        Note::create($validatedData);
           
        return redirect()->route('notes.index')
                         ->with('success', 'Note created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        return view('notes.show', compact('note'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        return view('notes.edit', compact('note'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(NoteUpdateRequest $request, Note $note)
    {
        $validatedData = $request->validated();
        $note->update($validatedData); 
        return redirect()->route('notes.index')
                        ->with('success', 'Note updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
           
        return redirect()->route('notes.index')
                        ->with('success', 'Note deleted successfully');
    }
}