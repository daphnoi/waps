<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $projects = tap(Project::with("user")->with("items")->paginate(5))->map(function($query){
            $query->setRelation("items",$query->items->take(10));
            return $query;
        });
        // dd($projects);
        return Inertia::render("Project/Index", [
            "Projects" => $projects
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
        $projects = Project::create([
            "name" => $request ->name,
            "details" => $request -> details,
            "user_id" => Auth::user() -> id,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project -> update([
            "name" => $request -> name,
            "details" => $request -> details,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $project = Project::find($id);
    $project->delete();

    return back();

}


}

