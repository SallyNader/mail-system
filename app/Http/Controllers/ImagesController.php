<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    


    $images=Image::all();


    return view('mail.allimages',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

     return view('mail.uploadimage');

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

'name'=>'required|unique:images,i_name'


            ]);
$path=public_path().'/upload';


$file=$request->file('file');
$name=$request->get('name');


$filename=rand(1111,9999).'.'.$file->getClientOriginalName();


if($file->move($path,$filename)){


Image::create([

'i_name'=>$name,
'i_path'=>$filename


    ]);

return redirect('image');

}




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
        


        $image=Image::find($id);

        return view('mail.updateimage',compact('image'));
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

'name'=>'required'

    ]);

        $image=Image::find($id);
$file=$request->file('file');



        if( !empty($file)){




$path=public_path().'/upload';
$filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();


if($file->move($path,$filename)){

$image->i_path=$filename;



}





        }
       

$image->i_name=$request->get('name');

$image->save();
return redirect()->route('image.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Image::find($id);
        $image->delete();



    return redirect()->back();
    }
}
