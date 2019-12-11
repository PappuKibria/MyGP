<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class GPController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');
    }

    public function contact(){
        return view('frontEnd.home.contactContent');
    }

    public function gallery(){
        return view('frontEnd.home.galleryContent');
    }

    public function about(){
        return view('frontEnd.home.aboutContent');
    }

    public function test(){
        $tables = DB::select('SHOW TABLES');
        return view('test', ['tables'=>$tables]);
    }


    public function getTableColumns($id)
    {
        $users = App\User::where('id', $id)->first();
//        var_dump(DB::getSchemaBuilder()->getColumnListing($table));
//        return DB::getSchemaBuilder()->getColumnListing($table);
        return view('test', ['users'=>$users] );

    }
    function test1(Request $request)
    {
        $data_list = DB::table($request)
//        ->groupBy('email')
        ->get();
        return view('test')->with('data_list', $data_list);
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('users')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }

}
