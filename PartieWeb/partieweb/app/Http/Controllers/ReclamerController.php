<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Reclamations;
use Illuminate\Http\Request;

class ReclamerController extends Controller
{
    // Afficher la page de reclamation
    public function reclamer()
    {
        return view('reclamer');
    }

    // Enregistrer les informations de reclamation
    public function reclamerPost(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'apogee' => 'required|numeric',
            'description' => 'required',
        ]);

        // Vérification de l'existence de l'étudiant par email
        $etudiantParEmail = DB::table('students')
            ->where('email', $request->email)
            ->where('apogee', $request->apogee)
            ->first();

        // Vérification de l'existence de l'étudiant par apogée
        $etudiantParApogee = DB::table('students')
            ->where('email', $request->email)
            ->where('apogee', $request->apogee)
            ->first();

        if ($etudiantParEmail && $etudiantParApogee) {
            // Les deux vérifications sont correctes, enregistrez la réclamation
            Reclamations::create([
                'name' => $etudiantParEmail->fullname,
                'email' => $request->email,
                'apogee' => $request->apogee,
                'cin' => $etudiantParEmail->cin,
                'description' => $request->description,
            ]);

            return back()->with('success', 'Votre demande est envoyée avec succès');
        } elseif (!$etudiantParEmail) {
            return back()->with('error', 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer');
        } elseif (!$etudiantParApogee) {
            return back()->with('error', 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer');
        } else{
            return back()->with('error', 'Étudiant non trouvé avec les informations saisis, Veuillez réesayer');
        }
    }
}
