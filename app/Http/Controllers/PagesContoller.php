<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\User;
use App\Membership;
use App\Note;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PagesContoller extends Controller
{
    public function index()
    {
        $all_courses = Note::select('course_name')->get();
        $premium_users_note = Note::join('memberships','memberships.user_id','=','notes.user_id')->where('package_name','Premium')->where('note_status','Approved')->paginate(8);



        return view('index',compact('premium_users_note','all_courses'));
    }

    public function about()
    {
      return view('about-us');
    }
    public function dashboard()
    {
//Get all notes and pass to view.
        $notes = Note::where('user_id','=',Auth::User()->id)->paginate(6);
        dd($notes);
        return view('dashboard', array('user' => Auth::user()) )->with('notes',$notes);
    }

    public function contact()
    {
      return view('contact-us');
    }

    public function terms()
    {
      return view('terms-condition');
    }

    public function pricing()
    {
      return view('ad-list-view');
    }

    public function blog()
    {
      return view('dashboard');
    }

    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function cart()
    {

        $carts = Note::join('carts','carts.note_id','=','notes.id')->where('carts.user_id','=',Auth::User()->id)->paginate(5);

foreach ( $carts as $cart){
    return view('cart',compact('cart'));
}


    }

    public function addToCart($note_id)
    {

        $user_id = Auth::User()->id;
//        dd($note_id);
//        dd($user_id);
//        $cart = Cart::find();
        $cart = Cart::where('carts.note_id','=',$note_id)->get();

        if($cart->isEmpty()){
            $cart = new Cart;

            $cart->user_id = $user_id;
            $cart->note_id = $note_id;
            $cart->save();
            return view('cart',compact('cart'))->with('success','Note added to cart successfully!');
        } else{
//            do something .....
            return view('cart')->with('warning','Note already in cart!!');
        }



    }

    public function membership()
    {
        $user = Membership::select('user_id')->where('user_id', Auth::User()->id)->get();



        if ($user->isEmpty()){

//        ToDO : display appropriate message or redirect to a proper page...

                return view('membership');
        }
        else{
            return redirect()->to('/');
        }



    }

    public function package()
    {
      return view('package');
    }

    public function orderComplete(){
        return view('order-complete');
    }

    public function single($id)
    {

        $note = Note::find($id);
//        dd($note);
        $user = Auth::User();
        $comment = Note::join('comments','comments.note_id','=','notes.id')->orderBy('comments.created_at', 'desc')->paginate(3);

        $user_with_notes_created = User::join('notes','notes.user_id','=','users.id')->where('notes.id','=',$id)->get();
//        $user_with_notes_created =$user[0];
//        dd($user);

       return view('single',compact('user_with_notes_created','comment','user'));
    }



   public function allNotes()
   {
       $all_notes = Note::paginate(9);
       $all_courses = Note::select('course_name')->get();
       $universities = User::select('university')->get();
       return view('category',compact('all_notes','all_courses','universities'));
   }

   public function search(Request $request)
   {
//       dd($request);
       $request->validate([
           'search-term'=> 'required|min:3'
       ]);
       $search_term = $request->input('search-term');
       dd($search_term);
//       $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//       if(count($user) > 0)
//           return view('welcome')->withDetails($user)->withQuery ( $q );
//       else return view ('welcome')->withMessage('No Details found. Try to search again !');
   }



   public function tnc(){
        return view('terms-condition');
   }

}
