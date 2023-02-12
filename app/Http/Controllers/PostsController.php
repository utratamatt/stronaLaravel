<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers;


class PostsController extends Controller
{
    public function index()
    {
        //$posts = Posts::all();
        $posts = Posts::where("isActive","=",true)->get();
        return view("Posts.index",['Posts'=>$posts]);
    }

    public function edit($id)
    {
        $posts = Posts::find($id);
        return view("Posts.edit",['Posts'=>$posts]);
    }
    public function update(Request $request,$id)
    {
        $posts = Posts::find($id);
        $posts->Title= $request->input('Title');
        $posts->Link= $request->input('Link');
        $posts->ShortDescription= $request->input('ShortDescription');
        $posts->ContentHTML= $request->input('ContentHTML');
        $posts->save();
        return redirect("/posty");
    }
    public function create()
    {
        return view('Posts.create');
    }
    public function addToDB(Request $request)
    {
        $posts = new Posts();
        $posts->Id = null;
        $posts->Title= $request->input('Title');
        $posts->Link= $request->input('Link');
        $posts->ShortDescription= $request->input('ShortDescription');
        $posts->ContentHTML= $request->input('ContentHTML');
        $posts->IsPublic = true;
        $posts->IsActive = true;
        $posts->PublishDateTime = date("y-m-d h-i-s");
        $posts->save();
        return redirect("/posty");
    }
    public function delete($id)
    {
        $posts = Posts::find($id);
        $posts->IsActive = false;
        $posts->save();
        return redirect("/posty");
    }
}
