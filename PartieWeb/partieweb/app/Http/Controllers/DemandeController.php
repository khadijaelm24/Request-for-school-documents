<?php

namespace App\Http\Controllers;
use App\Models\Atsreussite;
use App\Models\Atsscolarite;
use App\Models\Atsconvention;
use App\Models\Demandereleve;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    //afficher le formulaire des demandes
    public function demande(){
        return view('demande');
    }

    //enregistrer les informations de reclamation
    public function demandePost(Request $request){

        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'apogee' => 'required|digits:8',
            'cin' => 'required|regex:/^[A-Z]{1,2}\d{1,6}$/',
            'document' => 'required',
        ]);

        // Commune à tous les documents
        $communData = [
            'email' => $request->input('email'),
            'apogee' => $request->input('apogee'),
            'cin' => $request->input('cin'),
        ];

        switch($request->input('document')){

            case 'option1':
                $request->validate([
                    'niveau' => 'required|in:1ere annee,2eme annee,3eme annee,4eme annee,5eme annee',
                    'cne' => 'required|regex:/^[A-Za-z]\d{9}$/',
                    'date_naissance' => 'required|date_format:Y-m-d',
                ]);
                // Vérification si les données existent déjà dans la table demande_releve
                $existingRecord = Atsscolarite::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'date_naissance' =>$request->date_naissance,
                    'cne'=>$request->cne,
                    'status' => 'en cours',
                ])->first();
                
                $existingStudent = Students::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'niveau' =>$request->niveau,
                ])->first();

                if ($existingRecord) {
                    // Retournez avec un message d'erreur si les données existent déjà
                    return redirect()->back()->withErrors(['error' => 'Vous avez déjà demandé ce document!']);
                }

                else if(!$existingRecord && !$existingStudent){
                    // Retournez avec un message d'erreur si les informations de cet étudiant n'existe pas
                    return redirect()->back()->withErrors(['error' => 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer!']);
                }
                else if(!$existingRecord && $existingStudent){
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    $fullname = DB::select('SELECT fullname FROM students WHERE email = ? and  apogee= ? and cin=?', [$request->email, $request->apogee, $request->cin])[0]->fullname;
                    $annee_universitaire = DB::select('SELECT annee_universitaire FROM students WHERE email = ? and  apogee= ? and cin=? and niveau=?', [$request->email, $request->apogee, $request->cin, $request->niveau])[0]->annee_universitaire;
                    $filiere = DB::select('SELECT filiere FROM students WHERE email = ? and  apogee= ? and cin=? AND niveau=?', [$request->email, $request->apogee, $request->cin, $request->niveau])[0]->filiere;

                    Atsscolarite::create([
                        'email' => $request->email,
                        'apogee' => $request->apogee,
                        'cin' => $request->cin,
                        'nom' => $fullname,
                        'date_naissance' =>$request->date_naissance,
                        'cne'=>$request->cne,
                        'filiere' => $filiere,
                        'annee_univ'=> $annee_universitaire, 
                        'status' => 'en cours',
                    ]);
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    return redirect()->back()->with('success', 'Votre demande a bien été envoyée!');
                }
                break;

            case 'option2':
                
                $request->validate([
                    'nomm' => 'required',
                ]);

                // Vérification si les données existent déjà dans la table demande_releve
                $existingRecord = Atsreussite::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'nom' => $request->nomm,
                    'status' => 'en cours',
                ])->first();
                
                $existingStudent = Students::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'fullname' => $request->nomm,
                ])->first();

                if ($existingRecord) {
                    // Retournez avec un message d'erreur si les données existent déjà
                    return redirect()->back()->withErrors(['error' => 'Vous avez déjà demandé ce document!']);
                }

                else if(!$existingRecord && !$existingStudent){
                    // Retournez avec un message d'erreur si les informations de cet étudiant n'existe pas
                    return redirect()->back()->withErrors(['error' => 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer!']);
                }

                else if(!$existingRecord && $existingStudent){
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    
                    Atsreussite::create([
                        'email' => $request->email,
                        'apogee' => $request->apogee,
                        'cin' => $request->cin,
                        'nom' => $request->nomm,
                        'status' => 'en cours',
                    ]);
                    
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    return redirect()->back()->with('success', 'Votre demande a bien été envoyée!');
                }
                break;

            case 'option3':
                $request->validate([
                    'nom' => 'required|string',
                    'annee_etude' => 'required|regex:/^\d{4}$/',
                    'filiere' => 'required|in:GI,SCM,GC,GSTR,GM,BDIA',
                    'date_debut' => 'required|date_format:Y-m-d',
                    'date_fin' => 'required|date_format:Y-m-d',
                    'sujet_stage' => 'required|string',
                    'nom_societe' => 'required|string',
                    'adr_societe' => 'required|string',
                    'tel_societe' => 'required|string',
                    'email_societe' => 'required|email',
                    'nom_rep_societe' => 'required|string',
                    'qualite_rep_societe' => 'required|string',
                    'encadrant_societe' => 'required|string',
                    'encadrant_pedagogique' => 'required|string',
                ]);                
                /* Vérification si les données existent déjà dans la table demande_releve
                $existingRecord = Atsconvention::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'nom' => $request->nomm,
                    'status' => 'en cours',
                ])->first();*/
                
                $existingStudent = Students::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    //'fullname' => $request->nomm,
                ])->first();

               /* if ($existingRecord) {
                    // Retournez avec un message d'erreur si les données existent déjà
                    return redirect()->back()->withErrors(['error' => 'Vous avez déjà demandé ce document!']);
                }*/

                 if(!$existingStudent){
                    // Retournez avec un message d'erreur si les informations de cet étudiant n'existe pas
                    return redirect()->back()->withErrors(['error' => 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer!']);
                }

                else if($existingStudent){
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
             
                    Atsreussite::create([
                        'email' => $request->email,
                        'apogee' => $request->apogee,
                        'cin' => $request->cin,
                        'nom' => $request->nom,
                        'annee_etude' => $request->annee_etude,
                        'filiere' => $request->filiere,
                        'date_debut' => $request->date_debut,
                        'date_fin' => $request->date_fin,
                        'sujet_stage' =>$request->sujet_stage,
                        'nom_societe' => $request->nom_societe,
                        'adr_societe' => $request->adr_societe,
                        'tel_societe' => $request->tel_societe,
                        'email_societe' =>$request->email_societe,
                        'nom_rep_societe' => $request->nom_rep_societe,
                        'qualite_rep_societe' =>$request->qualite_rep_societe,
                        'encadrant_societe' =>$request->encadrant_societe,
                        'encadrant_pedagogique' => $request->encadrant_pedagogique,
                        'status' => 'en cours',
                    ]);
                    
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    return redirect()->back()->with('success', 'Votre demande a bien été envoyée!');
                }
                break;

            case 'option4':
                
                $request->validate([
                    'year' => 'required|in:2023-2024,2022-2023,2021-2022,2020-2021,2019-2020,2018-2019,2017-2018,2016-2017,2015-2016,2014-2015,2013-2014,2012-2013',
                ]);

                // Vérification si les données existent déjà dans la table demande_releve
                $existingRecord = Demandereleve::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'annee_universitaire' => $request->year,
                    'status' => 'en cours',
                ])->first();
                
                $existingStudent = Students::where([
                    'email' => $request->email,
                    'apogee' => $request->apogee,
                    'cin' => $request->cin,
                    'annee_universitaire' => $request->year,
                ])->first();

                if ($existingRecord) {
                    // Retournez avec un message d'erreur si les données existent déjà
                    return redirect()->back()->withErrors(['error' => 'Vous avez déjà demandé ce document!']);
                }

                else if(!$existingRecord && !$existingStudent){
                    // Retournez avec un message d'erreur si les informations de cet étudiant n'existe pas
                    return redirect()->back()->withErrors(['error' => 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer!']);
                }

                else if(!$existingRecord && $existingStudent){
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    
                    Demandereleve::create([
                        'email' => $request->email,
                        'apogee' => $request->apogee,
                        'cin' => $request->cin,
                        'annee_universitaire' => $request->year,
                        'status' => 'en cours',
                    ]);
                    
                    // Retournez avec un message pour confirmer l'envoi des données dans la BD
                    return redirect()->back()->with('success', 'Votre demande a bien été envoyée!');
                }

                break;

        }
    }
}
