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




$this->validate($request,[

'message'=>'required'


    ]);





// $this->validate($request,[

// 'message'=>'required'

//     ]);

        $theme=$request->get('theme');
        $contacts=$request->get('contact');

        $lists=$request->get('list');
        $subject=$request->get('subject');



$m=$request->get('message');
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


// echo $l;
// echo "<br>";

// }

// echo $message."---".$subject;

// // }




if(!empty($m) and !empty($user)){

  Mail::send('template.mail', ['m'=>$m,'subject'=>$subject,'user'=>$user], function ($message) use ($subject,$m,$user) {
           $message->from("cayshly@gmail.com", "Cayshly Trading Network");

            $message->to($user)->subject($subject);
        });



for ($i=0;$i<count($user);$i++) {
    # code...

Mails::create([

"person"=>$user[$i],
"subject"=>$subject,
"message"=>$m,
"theme"=>$theme





    ]);
}//end foreach


return redirect('mail');
}else {
    echo '<script>';
echo 'alert("you must choose at least one contact")';
echo '</script>';
}

// 

// }


// if(!empty($user)){



// foreach ($user as $key => $value) {



// $data=['message'=>$message];


// Mail::send('template.mail', ['message'=>$message], function($message) use($data) {

//     $message->from('sallynaderahmed@gmail.com',"cayshly");
//     $message->to("SALLY.NADER.AHMED@hotmail.com")->subject('Welcome!');
// });





// }




    
// }







// return redirect('mail');






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
