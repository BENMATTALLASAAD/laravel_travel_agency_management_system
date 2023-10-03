<?php

namespace App\Http\Controllers;

use App\Models\hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class hotelsController extends Controller
{
    function show(){
        $hotels =  hotels::paginate(6);
        return view('hotel.hotels',['hotels'=>$hotels]);
    }
    public function hotelInfos(hotels $hotel){
        return view('hotel.hotel_infos',compact('hotel'));
    }

    function hotelCreate(){
        return view('hotel.hotel_Add');
    }

    function hotelStore(Request $request){
        $request->validate([
            'nom_hotel'=>'required',
            'adresse_hotel'=>'required',
            'email_hotel'=>'required|email|',
            'website_hotel'=>'required',
            'image'=>'mimes:jpg,svg,png',
            'catégorie_hotel'=>'required',
            'prix_hotel'=>'required',
            
        ]);
        $this->uploadHotelImage($request);

        hotels::create($request->all());
        Alert::success('Hotel bien crée!');
        return redirect()->route('hotels');
    }

    private function uploadHotelImage(Request $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('hotels','public');
        }
    }

    public function hotelEdit(hotels $hotel){
        return view('hotel.hotel_Edit',compact('hotel'));
    }

    public function hotelUpdate(Request $request,$id){
        $hotel=hotels::find($id);
        $hotel->nom_hotel=$request->input('nom_hotel');
        $hotel->adresse_hotel=$request->input('adresse_hotel');
        $hotel->email_hotel=$request->input('email_hotel');
        $hotel->website_hotel=$request->input('website_hotel');
        $hotel->image=$request->file('image');
        $hotel->catégorie_hotel=$request->input('catégorie_hotel');
        $hotel->date_hotel=$request->input('date_hotel');
        $hotel->nbr_personnes=$request->input('nbr_personnes');
        $hotel->durée=$request->input('durée');
        $hotel->prix_hotel=$request->input('prix_hotel');
        
        $this->uploadHotelImage($request);

        Alert::success('Informations hotel bien modifiés!');
        return redirect()->route('hotels');

        
    }

    public function hotelDelete($id){
        $hotel=hotels::find($id);
        if ($hotel != null) {
            $hotel->delete();
            return redirect()->route('hotels')->with('message','Voulez-vous vraiment supprimer cet hotel?');        
        }
        
    }
}
