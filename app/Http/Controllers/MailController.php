<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Headers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Alert;
use DB;

use App\Http\Requests;

class MailController extends Controller
{
    public function index($id)
    {
        $data = Headers::find($id);
        return view('emails.reset', compact('data'));
    }

    public function mailsent($id,Request $request)
    {
   		$text = Input::get('respon');
      $datas = Headers::find($id);
      $table = new Headers;
      $target = $datas->email;
   		$data = [
   			'text' => $text,
        'target' => $target
   		];

   		Mail::send('emails.welcome', $data, function($message) use ($data)
        {
   	        $message->from('bsahax@gmail.com');
   	        $message->to($data['target'], 'Admin')->subject('Respon');
   	    });
      $datas->status= '1';
      $datas->save();
      Alert::success('Success', 'Response sent successfully');
      return Redirect::to('/data')->withMessage('Respon dikirim di email pendaftar');
   }
}