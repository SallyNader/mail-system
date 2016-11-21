<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Theme;
use Storage;
use File;
class ThemesController extends Controller
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



    public function uploadtheme(Request $request){




$inFolder=$request->get('theme');


   

$files=$request->File('multi');
foreach ($files as $file) {


$path=public_path()."/themes/".$inFolder;

     $filename = time() . rand(11111, 00000) . '.' . $file->
                getClientOriginalExtension();

   $file->move($path, $filename);


       //echo $path."<br>".$filename;

  
}



return redirect('theme');
    }







    public function index()
    {
       $themes=Theme::all();

       return view('mail.allthemes',compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes=Theme::all();
        return view('mail.uploadthemes',compact('themes'));
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
'name'=>'required|unique:themes,t_name'



        ]);

      // $path=public_path().'/upload';

      $name_theme=$request->get('name');
// $file=$request->file('file');


// if(!empty($file)){
//       $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();

//       if($file->move($path,$filename)){


 Theme::create([

't_name'=>$name_theme,
't_path'=>$name_theme
// 't_path'=>$filename
            ]);

 File::MakeDirectory(public_path("themes/".$name_theme));

$themes=Theme::all();

       return view('mail.uploadthemes',compact('themes'));
      

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
      $theme=Theme::find($id);


      return view('mail.updatetheme',compact('theme'));
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


'multi'=>'required'

            ]);
$inFolder=$request->get('name');
$file=$request->File('multi');

$theme=Theme::find($id);

$name=$request->get('name');


if(!empty($file)){












foreach ($file as $f) {


$path=public_path()."/themes/".$inFolder;

     $filename = time() . rand(11111, 00000) . '.' . $f->
                getClientOriginalExtension();

   $f->move($path, $filename);


       //echo $path."<br>".$filename;

  
}















// $path=public_path().'/upload';


// $filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();

// if($file->move($path,$filename)){

// $theme->t_path=$filename;


// }
}

// $theme->t_name=$name;
$theme->save();
return redirect()->route('theme.index'); 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $theme=Theme::find($id);
         File::deleteDirectory(public_path('/themes/'.$theme->t_name));
       $theme->delete();

    
       return redirect()->back();
    }
}
