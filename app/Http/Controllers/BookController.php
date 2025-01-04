<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listBooks() {
     
        $book= Book::all();
       
        return view('front.admin.books.listBooks', compact('book'));
    }


    public function bookpage(){
        return view('front.admin.books.createBooks');
    }

    public function createBook(Request $request){

       
        $b=new Book();
        
        $b->name= $request->bookName;
        $b->pageNumber= $request->bookPageNumber;
        $b->is_lended= $request->bookIs_lended;
        $b->barkod_no= $request->bookBarkod_no;
        $b->lend_time= $request->bookLend_time;
        
        $b->save();

        return redirect()->route('bookListesi')->with('success', 'Kitap başarıyla eklendi.');
       
    }

    public function updatePage($id){
  
        //$category=Category::where('id',$id)->first();
        $book=Book::find($id);
        return view('front.admin.books.update',compact('book'));
    }

    public function updateBook(Request $request){

        
        $request->validate([
            'bookName' => 'required|string|max:255',
            'bookPageNumber' => 'required|string|max:255',
            'bookIs_lended' => 'required|string|max:255',
            'bookBarkod_no' => 'required|string|max:255',
            'bookLend_time'=>'required',
            'bookID'=>'required'
        ]);
       
        $b= Book::find($request->bookID);
        
       
        $b->name= $request->bookName;
        $b->pageNumber= $request->bookpageNumber;
        $b->is_lended= $request->bookIs_lended;
        $b->barkod_no= $request->bookBarkod_no;
        $b->lend_time= $request->bookLend_time;
        
        
        $b->save();
        
        return redirect()->route('bookListesi')->with('success', 'Kitap başarıyla güncellendi.');
       
    }

    public function bookDelete($id){
   
        $book=Book::find($id);
    
        if($book->deleted_at == NULL){
            $book->delete();
            return redirect()->route('bookListesi')->with(['success'=>'Kitap başarıyla silindi.']);
        }
       else{
        return redirect()->route('bookListesi')->with(['error'=>'Hata Oluştu.']);
       }
    
        
    }

}
