<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Pays;
use App\EtatRelation;
use App\QualiteRelation;
use App\Secteur;
use App\Groupe;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact/index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Pays::all();
        $qualites = QualiteRelation::all();
        $etats = EtatRelation::all();
        $secteurs = Secteur::all();
        $groupes = Groupe::all();
        return view('contact/create',compact('pays','etats','qualites','secteurs','groupes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->entreprise = $request->input('entreprise');
        $contact->contact = $request->input('contact');
        $contact->fonction = $request->input('fonction');
        $contact->civilite = $request->input('civilite');
        $contact->fax = $request->input('fax');
        $contact->mail = $request->input('email');
        $contact->web = $request->input('web');
        $contact->adresse = $request->input('adresse');
        $contact->ville = $request->input('ville');
        $contact->cp = $request->input('cp');
        $contact->fix = $request->input('fix');
        $contact->mobile = $request->input('mobile');
        $contact->surveillance = $request->input('surveillance');
        $contact->secteur_id = $request->input('secteur');
        $contact->groupe_id = $request->input('groupe');
        $contact->pays_id = $request->input('pays');
        $contact->qualite_relation_id = $request->input('qualite');
        $contact->etat_relation_id = $request->input('relation');

        $contact->save();

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('contact/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        $pays = Pays::pluck('libelle','id');
        $qualites = QualiteRelation::pluck('libelle','id');
        $etats = EtatRelation::pluck('libelle','id');
        $secteurs = Secteur::pluck('libelle','id');
        $groupes = Groupe::pluck('libelle','id');
        return view('contact/edit',compact('pays','etats','qualites','secteurs','groupes','contact'));
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
        $contact = Contact::find($id);
        $contact->entreprise = $request->input('entreprise');
        $contact->contact = $request->input('contact');
        $contact->fonction = $request->input('fonction');
        $contact->civilite = $request->input('civilite');
        $contact->fax = $request->input('fax');
        $contact->mail = $request->input('email');
        $contact->web = $request->input('web');
        $contact->adresse = $request->input('adresse');
        $contact->ville = $request->input('ville');
        $contact->cp = $request->input('cp');
        $contact->fix = $request->input('fix');
        $contact->mobile = $request->input('mobile');
        $contact->surveillance = $request->input('surveillance');
        $contact->secteur_id = $request->input('secteur');
        $contact->groupe_id = $request->input('groupe');
        $contact->pays_id = $request->input('pays');
        $contact->qualite_relation_id = $request->input('qualite');
        $contact->etat_relation_id = $request->input('relation');

        $contact->save();

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
       
        $contact->delete();

        return redirect()->route('contact.index');
    }
}
