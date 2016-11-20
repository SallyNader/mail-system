<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mails;
use App\Contact;
use App\Lists;
use App\Users;
use App\Sent;
use App\Theme;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


// public function __construct()
//     {
//         $this->middleware('auth');
//     }

    public function index()
    {
        

$mails=Mails::all();


return view('mail.sentmails',compact('mails'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $contacts=Contact::all();



       $themes=Theme::all();
        $lists=Lists::all();
        return view('mail.sendemail' ,compact('contacts','lists','themes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {










// $this->validate($request,[

// 'message'=>'required'

//     ]);

        $theme=$request->get('theme');
        $contacts=$request->get('contact');

        $lists=$request->get('list');
        $subject=$request->get('subject');



$message=$request->get('message');
$to=$request->get('to');

        $user=[];
        $listacc=[];
      if(!empty($contacts))

      {

   foreach ($contacts as $contact) {


       $user[]=$contact;


   }



      }
if(!empty($to)){


$user[]=$to;


}


if(!empty($lists)){

foreach ($lists as $key => $list) {
   $listacc[]=$list;



}



}




foreach($listacc as $key=>$list){

//echo $list."<br/>";

$real=Lists::where('l_name',$list)->first();
//print_r($real);




//     echo "<br/>";

 


// echo "<br/>";
//echo("----------------------------------------");


foreach($real->contacts as $ll){




    //echo $ll->c_mail;
$user[]=$ll->c_mail;

    //echo "<br/>";
}
}

//echo"all users<br/>";
// foreach($user as  $l){


// //echo $l;
// //echo "<br>";

// }

// }





// 

// }


// if(!empty($user)){



foreach ($user as $key => $value) {






Mail::send('template.mail', $user, function($message) use($value) {

    $message->from('sallynaderahmed@gmail.com');
    $message->to($value)->subject('Welcome!');
});





}




    
// }














//return dd($listacc);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mail=Mails::where('m_id',$id)->get();


        return view('mail.contentofmessage',compact('mail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
