<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class employeController extends Controller
{
    function show(){
        $employes =  employe::paginate(7);
        return view('employe.employes',['employes'=>$employes]);
    }
    function employeAdd(){
        return view('employe.employe_Add');
    }

    public function employeProfile(employe $employe){
        return view('employe.employe_Profile',compact('employe'));
    }

    function employeStore(Request $request){
        $request->validate([
            'nom'=>'required',
            'prénom'=>'required',
            'password'=>'required',
            'login'=>'required|email|',
            'email'=>'required|email|',
            'image'=>'mimes:jpg,svg,png',
            'role'=>'required'
            
        ]);
        $password=$request->password;
        //hashing password et envoie du password crypté à la base de données
        $password=(Hash::make($password));
        $input=$request->all();
        $this->uploadEmployeImage($request);
        

        employe::create($request->all());
        Alert::success('Compte employé bien crée!');
        return redirect()->route('employes');
    }
    private function uploadEmployeImage(Request $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('employes','public');
        }
    }

    public function employeDelete($id){
        $employe=employe::find($id);
        if ($employe != null) {
            $employe->delete();
            return redirect()->route('employes')->with('message','Voulez-vous vraiment supprimer cet employé?');        
        }
        
    }

    public function employeEdit(employe $employe){
        return view('employe.employe_Edit',compact('employe'));
    }

    public function employeUpdate(Request $request,$id){
        $customer=employe::find($id);
        $customer->login=$request->input('login');
        $customer->nom=$request->input('nom');
        $customer->prénom=$request->input('prénom');
        $customer->email=$request->input('email');
        $customer->image=$request->file('image');
        $customer->role=$request->input('role');
        $this->uploademployeImage($request);
        

        $customer->update();
        Alert::success('Compte employé mis à jour avec succés!');
        return redirect()->route('employes');
        
    }
}
