<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        //lisar recursos
//        $portafolio=[
//            ['title'=>'Proyecto #1'],
//            ['title'=>'Proyecto #2'],
//            ['title'=>'Proyecto #3'],
//            ['title'=>'Proyecto #4']
//        ];
//        return view('portafolio',compact('portafolio'));
      //  $portafolio=Project::get();
      //  $portafolio=Project::orderBy('created_at','DESC')->GET();
       // $portafolio=Project::latest('created_at','DESC')->GET();
        $projects=Project::latest()->paginate(2);
        return view('portafolio',[
            'projects'=>Project::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create',[
            'project'=>new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
//        $title=$request->get('title');
//        $url=$request->get('url');
//        $description=$request->get('description');;
//
//       Project::create([
//            'title'=>$title,
//            'url'=>$url,
//            'description'=>$description,
//        ]);
//      return redirect()->route('portafolio.index');
        //return $request->get('title');
      //  return $request;
        //Project::create($request->all());
//        $fields= request()->validate([
//            'title'=>'required',
//            'url'=>'required',
//            'description'=>'required',
//
//        ]);
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','El Proyecto Fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
     //   return Project::find($id);
        return view('projects.show',[
            'project'=>$project
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('projects.edit',[
            'project'=>$project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        //
//      $project->update([
//         'title'=>request('title'),
//          'url'=>request('url'),
//          'description'=>request('description'),
//      ]);
      $project->update( $request->validated() );
      return redirect()->route('projects.show',$project)->with('status','El Proyecto Fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index')->with('status','El Proyecto Fue eliminado con exito');
    }
}
