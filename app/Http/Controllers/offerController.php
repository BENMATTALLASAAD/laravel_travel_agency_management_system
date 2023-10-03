<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class offerController extends Controller
{
    public function show(){
        $offers = offer::paginate(6);
        return view('offers.offers',['offers'=>$offers]);
    }

    public function offerCreate(){
        return view('offers.offer_Add');
    }
    public function offerEdit(offer $offer){
        return view('offers.offer_Edit',compact('offer'));
    }

    private function uploadofferImage(Request $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('offers','public');
        }
    }
    
    function offerStore(Request $request){
        $request->validate([
            'nom_offre'=>'required',
            'destination_offre'=>'required',
            'image'=>'mimes:jpg,svg,png',
            'date_depart'=>'required',
            'nbr_personnes'=>'required',
            'durée_offre'=>'required',
            'prix_offre'=>'required',
        
            
        ]);
        $this->uploadofferImage($request);

        offer::create($request->all());
        Alert::success('offre bien crée!');
        return redirect()->route('offers');
    }

    public function offerInfos(offer $offer){
        return view('offers.offer_infos',compact('offer'));
    }

    public function offerUpdate(Request $request,$id){
        $offer=offer::find($id);
        $offer->nom_offre=$request->input('nom_offre');
        $offer->destination_offre=$request->input('destination_offre');
        $offer->image=$request->file('image');
        $offer->date_depart=$request->input('date_depart');
        $offer->nbr_personnes=$request->input('nbr_personnes');
        $offer->durée_offre=$request->input('durée_offre');
        $offer->prix_offre=$request->input('prix_offre');
        
        $this->uploadofferImage($request);

        Alert::success('Informations offre bien modifiés!');
        return redirect()->route('offers');

        
    }

    public function offerDelete($id){
        $offer=offer::find($id);
        if ($offer != null) {
            $offer->delete();
            return redirect()->route('offers')->with('message','Voulez-vous vraiment supprimer cette offre?');        
        }
        
    }

}
