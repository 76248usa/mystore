<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('admin.user.index', compact('users'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);

        $user->delete();
        session()->flash('error', 'User deleted successfully');
        return redirect()->route('user.index');
    }
}
