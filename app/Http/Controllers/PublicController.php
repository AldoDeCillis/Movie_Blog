<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class PublicController extends Controller
{
    public function showHomepage()
    {
        return view('welcome');
    }

    public function becomeRevisor()
    {
        return view('become-revisor');
    }

    public function updateExtraInfo(Request $request){
        $requestingUser = Auth::user();
        $requestingUser->update([
            'address'=>$request->address,
            'civic'=>$request->civic,
            'iban'=>$request->iban,
            'tel'=>$request->tel,
        ]);
        Mail::to('movieblog@admin.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('dataStored', 'La tua richiesta è stata presa in carico');
    }
    public function makeUserRevisor(User $user){
        Artisan::call('movieBlog:revisor', ['email'=>$user->email]);
        return redirect('/')->with('revisorMade', 'Hai reso un utente revisore');
    }
}
