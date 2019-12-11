<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    function usersAll(){
        $users = DB::table('users')->get();
        $users = json_decode($users);
//        dd($users);
        return view('admin.users.allUsers', ['users'=>$users]);
    }

    function usersEdit(Request $request, $id){
        $alumni = User::where('id', $id)->first();
        return $alumni;

    }

    function userUpdate(Request $request){
        $data = [
            'student_id' => $request->student_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'blood_group' => $request->blood_group,
            'committee_session' => $request->committee_session,
        ];
        User::find($request->id)->update($data);
        $users = DB::table('users')->get();
        $users = json_decode($users);
        return view('admin.users.allUsers', ['users'=>$users]);

    }
    public function deleteData(Request $request)
    {
        $id = $request->get('id');
        if($id){
            User::where('id',$id)->delete();
            return "done";
        }else{
            return "ID not found";
        }
    }

    public function activate(Request $request){
        $id = $request->get('id');
        User::where('id', $id)->update(['is_active' => 1]);
        return 'done';
    }

    public function deActivate(Request $request){
        $id = $request->get('id');
        User::where('id', $id)->update(['is_active' => 0]);
        return 'done';
    }
}
