<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'file'=>'required|mimes:xls,xlsx|max:5120',
        ],[
            'file.required'=>'Please select a file',
            'file.mimes'=>'Please select a valid file',
            'file.max'=>'Please select a file less than 5 MB',
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        return redirect()->back()->with('success', 'File Uploaded & Users Imported Successfully');
    }
    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function show(){
        $users = User::all();
        return view('show',compact("users"));
    }
}
