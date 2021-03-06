<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lists;
use Illuminate\Support\Facades\Input;
class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
    {
      
    }

    public function try1(){


        $lists=Lists::all();


        return view('mail.try',compact('lists'));
    }
    public function index()
    {
       
$lists=Lists::all();



return view('mail.alllists',compact('lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mail.addlist');
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

'name'=>'required|unique:lists,l_name'

        ]);


     $input=Input::all();

     Lists::create(
        [
'l_name'=>$input['name']
        ]);
     return redirect('list');

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


public function destroyContact(Request $request){

$list_id=$request->get('list_id');

$contact_id=$request->get('contact_id');

$list=Lists::find($list_id);


// return  $list_id ."    ".$contact_id;

$list->contacts()->detach();


return redirect('list');


}

    public function destroy($id)
    {


        $list=Lists::find($id);
        $list->delete();

        return redirect()->back();
    }
}
