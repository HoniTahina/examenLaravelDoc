<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use App\Models\Rendezvous;
use App\Notifications\sendUserDemandNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) 
        {
            //vérifie si un utilisateur est actuellement authentifié dans l'application Laravel
            if (Auth::user()->usertype == '0') {
                 $document = Document::all();
            return view('user.home', compact('document'));
            }
            else {
                $demande = Demande::select( 'etat')->get()->groupBy(function($demande){
                    return $demande->etat;
                 });
                    $result = "";
                     
                 foreach($demande as $etat => $values){
                    $result.= " ['". $etat."', ".  count($values) ."] ,";    
                 }
                 $value = $result;
                return view('admin.home', compact('value'));
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) 
        {
            return redirect('home');
        }
        else
        {
             $document = Document::all();
             return view('user.home', compact('document'));
        }
        
    }

    public function rendezvous(Request $request)
    {
        $data = new Rendezvous;

        $data->nom=$request->nom;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->document=$request->document;
        $data->status='En cours de traitement';
        if (Auth::id()) {
            # code...
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        if ($data) {
            $data->notify(new sendUserDemandNotification());
        }

        return redirect('/mesdemandes')/*->with('message', '  Demande réussie . Nous vous contacterons bientôt')*/;
    }

    public function mesdemandes()
    {
        if (Auth::id()) {
            //vérifie si un utilisateur est actuellement authentifié dans l'application Laravel
            
            $userid = Auth::user()->id;

            $demande = Rendezvous::where('user_id',$userid)->get();

            return view('user.mes_demandes', compact('demande'));
        }
        else {
            return redirect()->back();
        }
    }

    public function cancel_demande($id)
    {
        $data = Demande::find($id);
        $data->delete();
        return "bomboclate";
    }

}
