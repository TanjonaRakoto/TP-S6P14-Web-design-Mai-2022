<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function TraitementLogin(Request $request)
    {
        $user = User::where('name_user',$request->name)
                ->where('pass_user',$request->pass)
                ->get() ;

        if (count($user)==0) {
            return view('login',[
                'message' => 'Nom ou Mot de passe Incorrect'
            ]);
        } else {
            $request->session()->put('iduser',$user[0]->id_user) ;
            return redirect('/accueil.html') ;
        }
    }

    public function Accueil()
    {
        if (session('iduser')==null || session('iduser'==0)) {
            return redirect("/") ;
        } else {
            return view('/accueilBO');
        }
    }

    public function InsererActualite(Request $request)
    {
        $image = $request->image;
        $imageName = time().'-'. $image->getClientOriginalName() ;
        $image->move(public_path('img-projects/uploads'),$imageName) ;

        News::create([
            'title_news' => $request->title,
            'summary_news' => $request->summary,
            'contains_news' => $request->contain,
            'image_news' => 'img-projects/uploads/'.$imageName
        ]);

        return redirect('/listeActu.html') ;
    }

    public function ListeActualite()
    {
        if (session('iduser')==null || session('iduser'==0)) {
            return redirect("/") ;
        } else {
            $listes = News::where('id_news','!=','0')->orderby('id_news','desc')->get() ;
            $citations = Citation::all() ;
            return view('listeActu',[
                'listes' => $listes,
                'citations' => $citations
            ]) ;
        }
    }

    public function ListeActualiteFront()
    {
        $listes = News::where('id_news','!=','0')->orderby('id_news','desc')->get() ;
        $citations = Citation::all() ;

        // return response()->json([
        //     'listeActu' => $listes,
        //     'citations' => $citations]
        // ) ;

        return view('frontoffice',[
            "listes" => $listes,
            "citations" => $citations
        ]);
    }

    public function Details($summary_news,$id_news)
    {
        if (session('iduser')==null || session('iduser'==0)) {
            return redirect("/") ;
        } else {
            $news = News::find($id_news) ;

            return view('details',[
                'news' => $news
            ]);
        }
    }

    public function Update($summary_news, $id_news)
    {
        $news = News::find($id_news) ;

        return view('update',[
           'news' => $news
        ]);
    }

    public function TraitementUpdate(Request $request)
    {
        $id_news = $request->id_news ;
        if (session('iduser')==null || session('iduser'==0)) {
            return redirect("/") ;
        } else {

            $news = News::find($id_news) ;
            $news->title_news = $request->title ;
            $news->summary_news = $request->summary ;
            $news->contains_news = $request->contain ;

            $news->save() ;

            return view('details',[
                'news' => $news
            ]);
        }
    }

    public function Delete($id_news)
    {
        if (session('iduser')==null || session('iduser'==0)) {
            return redirect("/") ;
        } else {
            $news = News::find($id_news) ;
            $news->delete();

            return redirect('/listeActu.html') ;
        }
    }

    public function DetailsFrontOffice($summary_news,$id_news)
    {
        $news = News::find($id_news) ;

        // return response()->json([
        //     'news' => $news,
        //     ]) ;

        return view('detailsFront',[
            'news' => $news
        ]);
    }

    public function InsererCitation(Request $request)
    {
        $image = $request->image;
        $imageName = time().'-'. $image->getClientOriginalName() ;
        $image->move(public_path('img-projects/uploads'),$imageName) ;

        Citation::create([
            'auteur_citation' => $request->auteur ,
            'fonction_auteur' => $request->position ,
            'image_auteur' => 'img-projects/uploads/'.$imageName,
            'valeur_citation' => $request->valeur
        ]);

        return redirect('/listeActu.html ') ;
    }
}
