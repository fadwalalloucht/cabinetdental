<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VideosController extends Controller
{
    //
    public function showvideo()
    {
        return view('admin.addVideo');
    }

    public function addfile(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mkv,avi|max:20480',
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        // Déplacer le fichier dans le répertoire approprié
        $file->move(public_path('uploads'), $fileName);

        // Déterminer le type de fichier
        $fileType = 'image';
        $imageExtensions = ['jpeg', 'png', 'jpg', 'gif'];
        $videoExtensions = ['mp4', 'mkv', 'avi'];

        if (in_array($file->getClientOriginalExtension(), $imageExtensions)) {
            $fileType = 'image';
        } elseif (in_array($file->getClientOriginalExtension(), $videoExtensions)) {
            $fileType = 'video';
        }

        // Créer un nouveau fichier dans la galerie
        $video = new Video();
        $video->file = $fileName;
        $video->type = $fileType;
        $video->save();

        // Ajouter un message de succès
        Session::flash('statuscode', 'success');
        return redirect('/liste-Galeries')->with('status', ' Votre Galerie a été enregistrer avec succès');

    }

    public function listeGaleries()
    {
        $files = Video::all();
        return view('admin.listGaleries')->with('files', $files);
    }

    public function deleteGalerie($id)
    {
        $file = Video::findOrFail($id);
        $file->delete();
        Session::flash('statuscode', 'error');
        return redirect('/liste-Galeries')->with('status', ' Votre galerie a été supprimer avec succès');
    }

    public function updateGalerie(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mkv,avi|max:20480',
        ]);

        // Trouver le fichier existant par ID
        $video = Video::find($id);

        if (!$video) {
            return redirect('/liste-Galeries')->with('error', 'Fichier non trouvé');
        }

        // Supprimer l'ancien fichier si nécessaire
        if (file_exists(public_path('uploads/' . $video->file))) {
            unlink(public_path('uploads/' . $video->file));
        }

        // Charger le nouveau fichier
        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        // Déplacer le fichier dans le répertoire approprié
        $file->move(public_path('uploads'), $fileName);

        // Déterminer le type de fichier
        $fileType = 'image';
        $imageExtensions = ['jpeg', 'png', 'jpg', 'gif'];
        $videoExtensions = ['mp4', 'mkv', 'avi'];

        if (in_array($file->getClientOriginalExtension(), $imageExtensions)) {
            $fileType = 'image';
        } elseif (in_array($file->getClientOriginalExtension(), $videoExtensions)) {
            $fileType = 'video';
        }

        // Mettre à jour les informations du fichier dans la base de données
        $video->file = $fileName;
        $video->type = $fileType;
        $video->save();

        // Ajouter un message de succès
        Session::flash('statuscode', 'info');
        return redirect('/liste-Galeries')->with('status', 'Votre Galerie a été mise à jour avec succès');
    }


    public function editGalerie($id){
        $file = Video::findOrFail($id);
        return view('admin.editGalerie')->with('file', $file);
    }

    
}
