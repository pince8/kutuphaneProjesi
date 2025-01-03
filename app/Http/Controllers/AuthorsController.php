<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorsController extends Controller
{
    public function listAuthors() {
     
        $author = Author::all();
        return view('front.admin.authors.listAuthors', compact('author'));
    }


    public function yazarPage(){
        return view('front.admin.authors.createAuthors');
    }

    public function createAuthor(Request $request){
       
        $c=new Author();
        
        $c->name= $request->authorName;
        $c->surname= $request->authorSurname;
        
        $c->save();

        return redirect()->route('yazarListesi')->with('success', 'Yazar başarıyla eklendi.');
       
    }

    public function updatePage($id){
  
        //$category=Category::where('id',$id)->first();
        $author=Author::find($id);
        return view('front.admin.authors.update',compact('author'));
    }

    public function updateAuthor(Request $request){

      
        $request->validate([
            'authorName' => 'required|string|max:255',
            'authorSurname' => 'required|string|max:255',
            'authorID'=>'required'
        ]);
         
       
        $a= Author::find($request->authorID);
       
        $a->name= $request->authorName;
        $a->surname= $request->authorSurname;
        
        $a->save();

        return redirect()->route('yazarListesi')->with('success', 'Yazar başarıyla güncellendi.');
       
    }

    public function authorDelete($id){
   
        $author=Author::find($id);
    
        if($author->deleted_at == NULL){
            $author->delete();
            return redirect()->route('yazarListesi')->with(['success'=>'Kategori başarıyla silindi.']);
        }
       else{
        return redirect()->route('yazarListesi')->with(['error'=>'Hata Oluştu.']);
       }
    
        
    }

}

