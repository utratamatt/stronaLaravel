<?php

namespace App\Http\Controllers;

use App\Models\Laczenie;
use App\Models\InternalEvent;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers;


class LaczenieController extends Controller
{
    public function index()
    {
        
        $laczenia = Laczenie::where("isActive","=",true)->get();
        return view("Laczenie.index",['laczenia'=>$laczenia]);
    }

    public function edit($id)
    {
        $laczenia = Laczenie::find($id);
		$internalEvents = InternalEvent::all();
		$posts = Posts::all();
        return view("Laczenie.edit",['laczenia'=>$laczenia, 'internalEvents'=>$internalEvents, 'posts'=>$posts ]);
    }
    public function update(Request $request,$id)
    {
        $laczenie = Laczenie::find($id);
        $laczenie->posts= $request->input('posts');
        $laczenie->internalevents= $request->input('internalevents');
        $laczenie->save();
        return redirect("/laczenie");
    }
    public function create()
    {
		 $internalEvents = InternalEvent::all();
		 $posts = Posts::all();
		 
		 return view('Laczenie.create', ['internalEvents'=>$internalEvents, 'posts'=>$posts ] );
    }
    public function addToDB(Request $request)
    {
        $laczenie = new Laczenie();
        $laczenie->Id = null;
        $laczenie->Posts= $request->input('posts');
        $laczenie->InternalEvents= $request->input('internalevents');
        $laczenie->IsActive = true;
        $laczenie->save();
        return redirect("/laczenie");
    }
    public function delete($id)
    {
        $laczenie = Posts::find($id);
        $laczenie->IsActive = false;
        $laczenie->save();
        return redirect("/laczenie");
    }
}
