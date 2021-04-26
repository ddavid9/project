<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Save;
use App\Models\State;

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
    //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {

        $save=new Save();
        $data=request()->input();
        $save ->name=$data['title'];
        $save ->user_id=Auth::id();
        $save ->state=$data['savestate'];
        $save->save();

        return redirect('/saves');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Save $save)
    {
        return view('show',compact('save'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $states=State::all();
        $load = Save::find($id);
        return view('load', [
            'load' => $load,
            'states'=>$states
        ]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $save=Save::find($id);
        $data=request()->input();
        $save ->name=$data['title'];
        $save ->state=$data['savestate'];
        $save->save();
        $url='/saves/'.$id;
        return redirect($url);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $save=Save::find($id);
        $save->delete();
        return redirect('/saves');
    }


}
