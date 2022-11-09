<?php
namespace App\Http\Controllers;



use Illuminate\Support\Facades\Input\Http;
use Request;
use App\metier\mangas;
use App\metier\Genre;
use App\metier\Scenariste;
use App\metier\Dessinateur;
use App\dao\ServiceDessinateur;
use App\dao\ServiceGenre;
use App\dao\ServiceManga;
use App\dao\ServiceScenariste;





use App\Exceptions\MonException;

class MangaController extends Controller{
    public function listerMangas(){
        try {

            $unServiceManga= new ServiceManga();
            $mesMangas= $unServiceManga->getlisteManga();
            return view('vues/listerMangas', compact('mesMangas'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

    public function ajoutManga(){
        try {
            $unGenre= new ServiceGenre();
            $mesGenres= $unGenre->getListeGenres();
            $unScenariste= new ServiceScenariste();
            $mesScenaristes= $unScenariste->getListeScenaristes();
            $unDessinateur= new ServiceDessinateur();
            $mesDessinateurs= $unDessinateur->getListeDessinateur();
            return view('vues.formMangaAjout', compact('mesGenres','mesScenaristes', 'mesDessinateurs'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

    public function postAjouterManga(){
        try {
            $code_d= Request::input("cbDessinateur");
            $prix= Request:: input('prix');
            $id_scenariste= Request:: input('cdScenariste');
            $titre= Request:: input('titre');
            $couverture= Request::file('couverture');
            $code_ge=Request::input('cbGenres');

            if (isset($couverture)){
                $imageName= $couverture->getClientOriginalName();
                Request::file('couverture')->move(public_path().'/assets/images/', $imageName);
            }else{
                $imageName='erreur.png';
            }
            $unManga= new ServiceManga();
            $unManga->ajoutManga($code_d, $prix, $titre, $imageName, $code_ge, $id_scenariste);
            return view('pageMenu');

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

    public function modification($id){
        try {
            $unServiceManga= new ServiceManga();
            $unManga= $unServiceManga->getManga($id);
            $unServiceGenre= new ServiceGenre();
            $mesGenres= $unServiceGenre->getListeGenres();
            $unServiceScenariste= new ServiceScenariste();
            $mesScenaristes= $unServiceScenariste->getListeScenaristes();
            $unServiceDessinateur= new ServiceDessinateur();
            $mesDessinateurs= $unServiceDessinateur->getListeDessinateur();

            return view('vues/formModifmanga', compact('unManga', 'mesGenres', 'mesScenaristes', 'mesDessinateurs'));

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }
    public function postModifierManga($id=null){
        try {
            $code= $id;
            $code_d= Request:: input('cbDessinateur');
            $prix= Request:: input('prix');
            $id_scenariste= Request:: input('cbScenariste');
            $titre= Request:: input('titre');
            $couverture= Request:: input('couverture');
            $code_ge= Request:: input('cbGenres');

            $unServiceManga= new ServiceManga();
            $unServiceManga->modificationManga($code,$code_d, $prix, $titre, $couverture, $code_ge, $id_scenariste);
            $mesMangas= $unServiceManga->getlisteManga();
            return view('vues/listerMangas', compact('mesMangas'));

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

    public function listerGenre(){
        try {
            $unGenre= new ServiceGenre();
            $mesGenre=$unGenre->getListeGenres();
            return view('vues/formChoixMangaGenre', compact('mesGenre'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }catch (\Exception $ex){
            $monErreur = $ex->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

}
