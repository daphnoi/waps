<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search ?? "";

        $projects = tap(Project::when($search, function ($query) use ($search) {
            $query
                ->where("name", "like", "%{$search}%")
                ->get();
        })
            ->with("user")
            ->with("items")
            ->orderBy("updated_at", "desc")
            ->paginate(5))
            ->map(function ($query) {
                $query->setRelation("items", $query->items->take(10));
                return $query;
            });
        // dd($projects);
        return Inertia::render("Project/Index", [
            "Projects" => $projects,
            "search_text" => $search
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
        $validated = $request->validate([
            'name' => 'required|max:50',
            'details' => 'required|max:50',
        ]);
        $projects = Project::create([
            "name" => $request->name,
            "details" => $request->details,
            "user_id" => Auth::user()->id,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        $top9Projects = Project::with("user")
            ->with("items")
            ->orderBy("updated_at", "desc")
            ->get();

        $from = date("Y-m-d", strtotime('-1 Week'));
        $to = date("Y-m-d", strtotime('+1 Day'));
        $newProjectInLastWeek = Project::whereBetween('created_at', [$from, $to])->orderBy("created_at", "desc")->get();

        $projects = Project::with("user")
            ->with("items")
            ->withCount("items")
            ->orderBy("updated_at", "desc")->get()->take(10);
        

        $chart_data = [];
        foreach ($projects as $key => $project) {
            $chart_data[] = array($project->name, $project->items_count);
        }

        return Inertia::render("Dashboard", [
            "top9Projects" => $top9Projects,
            "newProjectInLastWeek" => $newProjectInLastWeek,
            "chart" => $chart_data

        ]);
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
        $validated = $request->validate([
            'name' => 'required|max:50',
            'details' => 'required|max:50',
        ]);
        $project->update([
            "name" => $request->name,
            "details" => $request->details,

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
