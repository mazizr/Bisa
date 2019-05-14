<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Tag;
use App\Artikel;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at','desc')->take(4)->get();
        
        return view('frontend.Baru.index', compact('artikel'));
    }

    public function about()
    {
        return view('frontend.Baru.about');
    }

    public function contact()
    {
        return view('frontend.Baru.contact');
    }

    public function services()
    {
        return view('frontend.Baru.services');
    }

    public function blog()
    {
        $artikel = Artikel::orderBy('created_at','desc')->paginate(3);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.Baru.blog', compact('artikel','kategori','tag'));
        
       
    }
    
    public function singleblog(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.Baru.blog-single', compact('artikel','kategori','tag'));
    }
    

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.Baru.blog', compact('artikel','kategori','tag'));
    }

    public function blogkategori(Kategori $kategori)
    {
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.Baru.blog', compact('artikel','kategori','tag'));
    }
}
