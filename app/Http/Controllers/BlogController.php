<?php

namespace App\Http\Controllers;

use App\blog;
use App\User;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
     public function index()
    {   $table = view('BLogs.table',['blogs'=>blog::all()]);
        // dd($table);
        return view('BLogs.blogs',['table'=>$table]);
    }
    public function table()
    {
        return view('BLogs.table',['blogs'=>blog::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BLogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {   
        $blog = new Blog();
        $blog->title=  $request['title'];
        $blog->description =  $request['description'];
        $blog->user_id = 1;
        // dd($blog);
        $blog->save();
         return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        return view('BLogs.show',['blogs'=>Blog::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $id)
    {   
        return view('BLogs.edit',['blog'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $BLog)
    {   $BLog = BLog::find($id);
        $BLog->title = $request->input('title');
        $BLog->description = $request->input('description');
        $BLog->user_id = \Auth::user()->id;
        $BLog->save();
        // return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $bloga = Blog::find($id);
       $bloga->delete();
       return redirect(route('blog.index'));
    }
}
