<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use App\Models\User;
use App\Notifications\sendUserDemandNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    //
    public function faireDemande(){
        $document = Document::all();
        return view('user.faireDemande', compact('document'));
    }
    public function demandeEnCours(){
        $id = Auth::id();
        $etat = 'En cours';
        $demande = Demande::where('user_id',$id)->where('etat',$etat)
                            ->get();
        return view('user.demandesEnCours',compact('demande'));
    }
    public function mesDemandes(){
        $id = Auth::id();
        $etatA = "Validé";
        $etatP = "Prête";
        $etatR = "Refusé";
        $etat = 'En cours';
        $demandeE = Demande::where('user_id',$id)->where('etat',$etat)
                            ->get();
        $demandeA = Demande::where('user_id',$id)->where('etat',$etatA)
        ->get();
        $demandeP = Demande::where('user_id',$id)->where('etat',$etatP)
        ->get();
        $demandeR = Demande::where('etat',$etatR)->where('etat',$etatR)
        ->get();
        return view('user.mesDemandes',[
            'demandeA' => $demandeA, 'demandeR' => $demandeR, 'demandeP' => $demandeP, 'demandeE' => $demandeE]);
    }
   
    
    public function store(){
        $demande = new Demande;
        
        $demande->document = request('document');       
        $demande->date = request('date');       
        $demande->message = request('message');       
        $demande->user_id = Auth::id();       
        $demande->save();
        $user = User::find(Auth::id());
        $user->notify(new sendUserDemandNotification());
        
        return redirect('/mesDemandes ');
    }
    
    public function delete($id){
        $demande = Demande::find($id);
        $demande->delete();
            return redirect('mesDemandes');   
    }
}
