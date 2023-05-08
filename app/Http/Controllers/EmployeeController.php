<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('datapegawai', compact('data'));
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data berhasil ditambahkan!');
    }

    public function tampilkandata($id)
    {
        $data = Employee::find($id);
        // dd($data);
        return view('tampilkandata', compact('data'));

    }
    public function updatedata(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->update($request->all());
        // dd($data);
        return redirect()->route('pegawai')->with('success', 'Data berhasil update!');

    }

    public function delete($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data berhasil dihapus!');
    }
}
