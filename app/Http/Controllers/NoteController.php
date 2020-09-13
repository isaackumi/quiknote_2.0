<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\User;
use App\Membership;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = Membership::select('user_id')->where('user_id', Auth::User()->id)->get();



    if ($user->isEmpty()){

//        ToDO : dispaly appropriate message or redirect to a proper page...

        return redirect()->to('/');
        }
    else{
        return view('Ad-listing');
    }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $this->validate($request, [
            'note_title' => 'required',
            'note_description'=>'required',
            'note_type'=>'required',
            'note_thumbnail'=>'image|nullable|max:1999',
            'user_id'=>'required',
            'course_name'=>'required',
            'note_price'=>'required',
            'note_pdf'=>"required|mimetypes:application/pdf|max:10000",
            'note_pdf_image_sample'=>'image|nullable|max:1999',
            'note_creator_achievements'=>'required',
            'checkbox'=> 'required'

        ]);

//        handle image upload - Note Thumbnail

        if ($request->hasFile('note_thumbnail')){

//            get filename with extension

            $fileNameWithExt =$request->file('note_thumbnail')->getClientOriginalName();
            //            get filename only
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //            get  extension only
            $extension =$request->file('note_thumbnail')->getClientOriginalExtension();

//            file name to store
            $note_thumbnail = $fileName.'_'.time().'.'.$extension;
            Image::make($request->file('note_thumbnail'))->crop(160,150)->save(public_path('/storage/uploads/'.$note_thumbnail));

//            upload image
//            $path = $request->file('note_thumbnail')->storeAs('public/uploads',$note_thumbnail);

        } else{
            $note_thumbnail = 'noimage.jpg';
        }



        if ($request->hasFile('note_pdf')){
//            get filename with extension
            $fileNameWithExt =$request->file('note_pdf')->getClientOriginalName();
            //            get filename only
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //            get  extension only
            $extension =$request->file('note_pdf')->getClientOriginalExtension();

//            file name to store
            $note_pdf = $fileName.'_'.time().'.'.$extension;

//            upload image
            $path = $request->file('note_pdf')->storeAs('public/uploads',$note_pdf);

        } else{
            $note_pdf = 'noimage.jpg';
        }



        if ($request->hasFile('note_pdf_image_sample')){
//            get filename with extension
            $fileNameWithExt =$request->file('note_pdf_image_sample')->getClientOriginalName();
            //            get filename only
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //            get  extension only
            $extension =$request->file('note_pdf_image_sample')->getClientOriginalExtension();

//            file name to store
            $note_pdf_image_sample = $fileName.'_'.time().'.'.$extension;

//            upload image
            $path = $request->file('note_pdf_image_sample')->storeAs('public/uploads',$note_pdf_image_sample);

        } else{
            $note_pdf_image_sample = 'noimage.jpg';
        }









        $note = new Note();
        $note->note_title = $request->input('note_title');
        $note->note_description = $request->input('note_description');
        $note->note_type = $request->input('note_type');
        $note->course_name = $request->input('course_name');
        $note->note_price = $request->input('note_price');
        $note->user_id = $request->input('user_id');
        $note->note_creator_achievements = $request->input('note_creator_achievements');
        $note->note_thumbnail = $note_thumbnail;
        $note->note_pdf = $note_pdf;
        $note->note_pdf_image_sample = $note_pdf_image_sample;
        $note->save();


        return back()->with('success','Note uploaded successfully !!');





    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }


}
