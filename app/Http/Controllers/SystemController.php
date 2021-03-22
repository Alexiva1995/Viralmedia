<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\News;

class SystemController extends Controller
{
    public function general(){
        View::share('titleg', 'Ajustes Generales');
        return view('ajust.general');
    }

    public function listNews(){

        $new = News::all();

        View::share('titleg', 'Noticias');
        return view('ajust.news')->with('new', $new);
        
    }

    public function createNews(){

        $new = News::all();

        return view('ajust.news-component.news-create')
        ->with('new', $new);

    }

    public function storeNews(Request $request)
    {

        $new = News::all();

        $fields = [   ];

        $msj = [    ];

        $this->validate($request, $fields, $msj);

           // foto
           $new = News::create($request->all());

           if ($request->hasFile('photo')) {
               if(!$new->getMedia('photo')->isEmpty()) {
                   $new->getFirstMedia('photo')->delete();
               }
               $new->addMediaFromRequest("photo")->toMediaCollection('photo');
           }
        $new->save();

        return redirect()->route('news.list')->with('msj-success','Se creo la Noticia Exitosamente');
    }

    public function editNews($id)
    {

        $new = News::find($id);
 
        return view('ajust.news-component.news-edit')
        ->with('new',$new); 
    }
    
    public function updateNews(Request $request, $id)
    {
        $new = News::find($id);

        $fields = [     ];

        $msj = [       ];

        $this->validate($request, $fields, $msj);

        // foto

        $new->update($request->all());

        if ($request->hasFile('photo')) {
            if(!$new->getMedia('photo')->isEmpty()) {
                $new->getFirstMedia('photo')->delete();
            }
            $new->addMediaFromRequest("photo")->toMediaCollection('photo');
        }

        $new->save();

        return redirect()->route('news.list')->with('msj-success','Se actualizo la Noticia Exitosamente');
    }


        // permite eliminar una orden
    
        public function destroyNews($id)
        {
          $new = News::find($id);
          
          $new->delete();
          
          return redirect()->route('news.list')->with('msj-success', 'Noticia '.$id.' Eliminado');
        }
    


    public function languages(){
        View::share('titleg', 'Idioma');
        return view('ajust.languages');
    }
}
