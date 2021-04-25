<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Save;


class SaveController extends Controller
{
    public function index()
    {

            $saves=Save::where('user_id',Auth::id())->get();
            #dd($saves);
        return view('/saves', ['saves'=>$saves]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('projects.create',['tags' => Tag::all()]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //    # dd(request()->all());
    // //    $project = new Project();
    // //    $project -> title=request()->validate([
    // //        'title' => 'required|min:3',
    // //        //'valami' => 'required'
    // //        ]);
    // //    $project ->save();

    //     $project=Project::create(
    //         $this -> validateProject()
    //     );
    //     $project->tags()->attach(request('tags'));
    //     return redirect(route('projects.index'));
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Project $project)
    // {
    //    # $project = Project::FindOrFail($id);
    //     return view('projects.show',compact('project'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $project = Project::find($id);
    //     return view('projects.edit', [
    //         'project' => $project
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Project $project)
    // {
    //     // $project=Project::find($id);
    //     // $project->title=request('title');
    //     // $project->save();

    //     $project->update(
    //         $this->validateProject()
    //     );

    //     return redirect($project->path());
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $project=Project::find($id);
    //     $project->delete();
    //     return redirect('/projects');
    // }


}
