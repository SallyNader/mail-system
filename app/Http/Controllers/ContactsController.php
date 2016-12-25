<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Lists;
use DB;
class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function __construct()
    {
       
    }
    public function addToList(Request $request){

$listID=$request->get('lists');
$contactID=$request->get('contactid');


DB::table('contact_list')->insert([

'contact_id'=>$contactID,
'list_id'=>$listID
    ]);

return redirect()->back();


    }
    public function index()
    {


    


       $lists=Lists::all();


        $contacts=Contact::all();

        return view('mail.allcontacts',compact('contacts','lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mail.addcontact');
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
            'email'=>'required|unique:contacts,c_mail'





            ]);

  $email=$request->get('email');


  Contact::create(
    [

'c_mail'=>$email
    ]);



return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $contact=Contact::find($id);

       return view('mail.updatecontact',compact('contact'));
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


        $this->validate($request,[

'email'=>'required|unique:contacts,c_mail'

            ]);
       $contact=Contact::find($id);
$email=$request->get('email');
   

   $contact->c_mail=$email;
   $contact->save();

   return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {





        $contact=Contact::find($id);

        $contact->delete();


        return redirect()->back();
    }
}
