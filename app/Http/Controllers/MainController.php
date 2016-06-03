<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Headers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Alert;

class MainController extends Controller
{
    public function index()
    {

    	return view('welcome');
    }

    public function admin(){
		$datas = Headers::all();
		return view('admin.home')->with('datas',$datas);
	}
	public function getForm(){
		return view('form');
	}
	public function store(Request $data){
		$role = array(
			'nama' => 'required|min:3',
			'email' => 'required|email',
			'file' => 'required|mimes:doc,docx,pdf'
			);
		$message = array(
			'nama.required' => 'Nama harus diisi',
			'nama.min' => 'Nama minimal harus 3 karakter',
			'email.required' => 'Email harus diisi',
			'email.email' => 'Masukkan email dan sertakan @',
			'file.required' => 'Harap pilih file',
			'file.mimes' => 'File harus format doc,docx, atau pdf'
			);
		$validation = Validator::make($data->all(), $role, $message);
		if($validation->fails()){
			alert()->error('Please fill out the blank', "Data wasn't sent!")
				   ->autoclose(5000);
			return Redirect::back()->withErrors($validation);
		}else{
			$file = $data->file('file');
			$filename = $data->Input('nama');
			$fileextension = $file->getClientOriginalExtension();
			$success = $file->move('uploads',$filename.'.'.$fileextension);
			if($success){
				alert()->success('Data Succesfully Sent!','Success!');
				$table = new Headers;
				$table->name = $data->Input('nama');
				$table->email = $data->Input('email');
				$table->file_name = $filename.'.'.$fileextension;
				$table->status = '0';
				$table->save();
				return Redirect::to('/');
			}
		}
	}
}
