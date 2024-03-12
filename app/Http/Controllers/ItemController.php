<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project, Request $request)
    {
        // dd($project->items()->get());
        $search = $request->search ?? '';
        
        $Items = $project->items()
            ->when($search, function($query) use($search){
            $query
            ->where("name","like","%{$search}%")
            ->get();
        })->with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

            // dd($Items);
        return Inertia::render("Items/Itemslist", [
            "Items" => $Items,
            "search_text" => $search,
            "Project" => $project
        ]);
    }

    public function item_index(Request $request, Item $item)

    {
            return Inertia::render("Items/Item",[
                "Item" => $item
            ]);
    
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        // dd($request);
        $validated = $request->validate([
        'name' => 'required|max:50',
        'description' => 'required|max:50',
        // 'project_id' => 'required|exists:projects,id',
        ]);
        $Items = Item::create([
            "user_id" => Auth::user() -> id,
            "name" => $request ->name,
            "description" => $request -> description,
            "config" => "{}",
            "results" => "{}",
            "project_id" => $request -> project_id,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {   
        $validated = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:50',
        ]);
        $item -> update([
            "name" => $request -> name,
            "description" => $request -> description,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $item = Item::find($id);
        $item->delete();

    return back();
    }

}
