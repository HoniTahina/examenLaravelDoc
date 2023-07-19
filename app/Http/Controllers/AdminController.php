<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use App\Models\Rendezvous;
use App\Models\User;
use App\Notifications\ReadySendUser;
use App\Notifications\sendUserDemandNotification;
use App\Notifications\UserNotificationRefu;
use App\Notifications\UserNotificationVali;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_document');
    }

    public function upload(Request $request)
    {
        $document = new Document();

        $image = $request->file;

        $imagename = time().' . '.$image->getClientoriginalExtension();

        $request->file->move('documentimage',$imagename);

        $document->image=$imagename;

        $document->nom = $request->nom;

        $document->format = $request->format;

        $document->type = $request->type;

        $document->save();

        return redirect()->back()->with('message','Document ajouté avec succès');
    }

    public function showdemand()
    {
        $data = Rendezvous::all();
        return view('admin.showdemand',compact('data'));
    }

    public function valide($id)
    {
         $data = Demande::find($id);
         $data->etat = 'Validé';
         $data->save();
         $user = User::find($data->user_id);
         $user->notify(new UserNotificationVali());
         return redirect()->back();

        //return ('Tokoss');
    }

    public function canceled($id)
    {
         $data = Demande::find($id);
         $data->etat = 'Refusé';
         $data->save();
         $user = User::find($data->user_id);
         $user->notify(new UserNotificationRefu());
         return redirect()->back();

    }

    public function pret($id)
    {
         $data = Demande::find($id);
         $data->etat = 'Prête';
         $data->save();
         $user = User::find($data->user_id);
         $user->notify(new ReadySendUser());

        return redirect()->back();

        //return ('Tokoss');
    }

    public function showdocument()
    {
        $data = Document::all();
        return view('admin.showdocument',compact('data'));
    }

    public function deletedocument($id)
    {
        $data = Document::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedocument($id)
    {
        $data = Document::find($id);
    return view('admin.update_document',compact('data'));
    }

    public function editdocument(Request $request , $id)
    {
        $document = Document::find($id);

        $document->nom = $request->nom;

        $document->format = $request->format;

        $document->type = $request->type;

        $image = $request->file;

        if ($image) {
            # code...
        

        $imagename = time().' . '.$image->getClientoriginalExtension();

        $request->file->move('documentimage',$imagename);

        $document->image=$imagename;
    }
        $document->save();

        return redirect()->back()->with('message','Le document a été modifié avec succèss');;
    }

    public function showuser()
    {
        $data = User::all();
        return view('admin.showuser',compact('data'));
    }
    public function liste(){
        $etatE = "En cours";
        $demandeE = Demande::where('etat',$etatE)
        ->get();
        $etatA = "Validé";
        $demandeA = Demande::where('etat',$etatA)
        ->get();
        return view('admin.liste-demande',compact('demandeE'),compact('demandeA'));
    }
    public function archive(){
        $etatP = "Prête";
        $etatR = "Refusé";
        $demandeP = Demande::where('etat',$etatP)
        ->get();
        $demandeR = Demande::where('etat',$etatR)
        ->get();
        return view('admin.archive-demande',compact('demandeP'),compact('demandeR'));
    }

}
