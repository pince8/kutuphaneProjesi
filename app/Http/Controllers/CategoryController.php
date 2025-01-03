<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listPage() {
        
        $cats = Category::get();
        $firstCategory=Category::first();
        return view('front.admin.kategori.list', compact('cats','firstCategory'));
    }

    public function createPage(){
        $category = Category::get();
        return view('front.admin.kategori.create',compact('category'));
    }

    public function updatePage($id){

        //$category=Category::where('id',$id)->first();
        $category=Category::find($id);
        return view('front.admin.kategori.update',compact('category'));
    }
    
    public function addToDB(Request $request){

        $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);
         
        $c=new Category();
       
        $c->name= $request->categoryName;
        
        $c->save();

        return redirect()->route('kategorilerListPage')->with('success', 'Kategori başarıyla eklendi.');
       
    }

    public function updateCategory(Request $request){

      
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryID'=>'required'
        ]);
         
       
        $c= Category::find($request->categoryID);
       
        $c->name= $request->categoryName;
        
        $c->save();

        return redirect()->route('kategorilerListPage')->with('success', 'Kategori başarıyla güncellendi.');
       
    }

    public function categoryDelete($id){
   
        $category=Category::find($id);
    
        if($category->deleted_at == NULL){
            $category->delete();
            return redirect()->route('kategorilerListPage')->with(['success'=>'Kategori başarıyla silindi.']);
        }
       else{
        return redirect()->route('kategorilerListPage')->with(['error'=>'Hata Oluştu.']);
       }
    
        
    }
}
