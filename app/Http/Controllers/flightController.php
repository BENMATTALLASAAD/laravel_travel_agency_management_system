<?php

namespace App\Http\Controllers;

use App\Models\flight;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class flightController extends Controller
{
    public function show(){
        $flights =  flight::paginate(7);
        return view('flights.flights',['flights'=>$flights]);
    }

    function flightCreate(){
        return view('flights.flight_Add');
    }
    public function flightInfos(flight $flight){
        return view('flights.flight_infos',compact('flight'));
    }

    function flightStore(Request $request){
        $request->validate([
            'id_vol'=>'required|unique|',
            'destination'=>'required',
            'date_vol'=>'required|email|',
            'compagnie'=>'required',
            'image'=>'mimes:jpg,svg,png',
            'nbr_places'=>'required',
            'prix'=>'required',
            'nbr_personnes'=>'required',
            
        
        ]);
        $this->uploadFlightImage($request);

        flight::create($request->all());
        Alert::success('Vol bien crée!');
        return redirect()->route('flights');
    }

    private function uploadFlightImage(Request $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('flights','public');
        }
    }

    public function flightUpdate(Request $request,$id){
        $flight=flight::find($id);
        $flight->id_vol=$request->input('id_vol');
        $flight->destination=$request->input('destination');
        $flight->date_vol=$request->input('date_vol');
        $flight->compagnie=$request->input('compagnie');
        $flight->nbr_places=$request->input('nbr_places');
        $flight->prix=$request->input('prix');
        

        
        $this->uploadFlightImage($request);

        Alert::success('Informations vol bien modifiés!');
        return redirect()->route('flights');

        
    }

    public function flightEdit(flight $flight){
        return view('flights.flight_Edit',compact('flight'));
    }

    public function flightDelete($id){
        $flight=flight::find($id);
        if ($flight != null) {
            $flight->delete();
            return redirect()->route('flights')->with('message','Voulez-vous vraiment supprimer ce vol?');        
        }
        
    }
}
