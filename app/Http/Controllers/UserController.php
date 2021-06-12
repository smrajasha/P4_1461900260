<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Pengguna;
 
use App\Exports\PenggunaExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
	{
		$user = Pengguna::all();
		return view('user0260',['user'=>$user]);
	}
 
	public function export_excel()
	{
		return Excel::download(new PenggunaExport, 'Data_1461900260.xlsx');
	}

    public function create(){
        return view("create0260");
    }

    public function store(Request $request)
    {
	
	DB::table('user')->insert([
		'nama' => $request->nama,
		'username' => $request->username,
        'password' => $request->password,
		
	]);
    return redirect('/user');
}
}
