<?php

namespace App\Http\Controllers;

use App\Models\Publicator;
use Illuminate\Http\Request;

class PublicatorController extends Controller
{
    public function listPublicators() {
     
        $publicator = Publicator::all();
        return view('front.admin.publicators.listPublicators', compact('publicator'));
    }


    public function publicatorpage(){
        return view('front.admin.publicators.createPublicators');
    }

    public function createPublicator(Request $request){
       
        $p=new Publicator();
        
        $p->name= $request->publicatorName;
        $p->surname= $request->publicatorSurname;
        $p->address= $request->publicatorAddress;
        $p->mail= $request->publicatorMail;
        
        $p->save();

        return redirect()->route('publicatorListesi')->with('success', 'Yazar başarıyla eklendi.');
       
    }

    public function updatePage($id){
  
        //$category=Category::where('id',$id)->first();
        $publicator=Publicator::find($id);
        return view('front.admin.publicators.update',compact('publicator'));
    }

    public function updatePublicator(Request $request){

        
        $request->validate([
            'publicatorName' => 'required|string|max:255',
            'publicatorSurname' => 'required|string|max:255',
            'publicatorMail' => 'required|string|max:255',
            'publicatorAddress' => 'required|string|max:255',
            'publicatorID'=>'required'
        ]);
       
        $p= Publicator::find($request->publicatorID);
        
       
        $p->name= $request->publicatorName;
        $p->surname= $request->publicatorSurname;
        $p->address= $request->publicatorAddress;
        $p->mail= $request->publicatorMail;
        
        $p->save();
        
        return redirect()->route('publicatorListesi')->with('success', 'Yazar başarıyla güncellendi.');
       
    }

    public function publicatorDelete($id){
   
        $publicator=Publicator::find($id);
    
        if($publicator->deleted_at == NULL){
            $publicator->delete();
            return redirect()->route('publicatorListesi')->with(['success'=>'Kategori başarıyla silindi.']);
        }
       else{
        return redirect()->route('publicatorListesi')->with(['error'=>'Hata Oluştu.']);
       }
    
        
    }

}
