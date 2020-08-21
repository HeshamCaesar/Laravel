<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\blog;
class UserController extends Controller
{
    public function index()
    {   
        return view('user.users',['users'=>User::all(),'blogs'=>blogs::all()]);
    }   
    public function create ()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return redirect(route('user.index'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('user.index'));
    }
}
