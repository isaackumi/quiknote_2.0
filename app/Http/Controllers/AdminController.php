<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //
    public function allNotes()
    {

        $all_notes = Note::paginate(5);
        $notes_count = Note::all()->count();
        $users_count = User::all()->count();
        $approved_notes = Note::where('note_status','=','Approved')->paginate(5);
        $pending_notes = Note::where('note_status','=','Pending')->paginate(5);
        $approved_notes_count = Note::where('note_status','=','Approved')->count();
        $premium_users_note = Note::with('user')->join('memberships','memberships.user_id','=','notes.user_id')->where('package_name','Premium')->paginate(8);
        $premium_users_count = Note::with('user')->join('memberships','memberships.user_id','=','notes.user_id')->where('package_name','Premium')->count();

        $all_users = User::paginate(5);
        return view('admin.index',compact('all_notes','notes_count','all_users','users_count','approved_notes','approved_notes_count','premium_users_count','premium_users_note'));
    }

    public function approveNote($note_id)
    {

        $note = Note::find($note_id);
        if( $note->note_status == 'Approved'){
            $note->note_status = 'Pending';

            $note->save();
            return back()->with('warning','Note status changed to pending');

        }else{
            $note->note_status = 'Approved';
            $note->save();
            return back()->with('success','Note approved successfully!!');
        }





    }

    public function deleteNote($note_id)
    {
        $note = Note::find($note_id);
        $note->delete();

        return back()->with('warning','Note deleted successfully');

    }

    public function deleteUser($user_id)
    {
        $user = User::find($user_id);
        $user->delete();

        return back()->with('warning','User deleted successfully');

    }

    public function adminProfile()
    {
        return view('admin.admin-profile');
    }

    public function download($file)
    {
//        return response()->download(storage_path("public/uploads/{$file}"));
        return response()->download(public_path("storage/uploads/{$file}"));
    }
}
