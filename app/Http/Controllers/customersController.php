<?php

namespace App\Http\Controllers;
use App\Http\Requests\customerRequest;
use Illuminate\Http\Request;
use App\Models\customers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class customersController extends Controller
{
    public function show(){
        $customers =  customers::paginate(4);
        return view('customer.customers',['customers'=>$customers]);
    }

    public function customerProfile(customers $customer){
        return view('customer.customer_Profile',compact('customer'));
    }
    public function customerEdit(customers $customer){
        return view('customer.customer_Edit',compact('customer'));
    }
    public function customerUpdate(Request $request,$id){
        $customer=customers::find($id);
        $customer->login=$request->input('login');
        $customer->nom=$request->input('name');
        $customer->prénom=$request->input('lastName');
        $customer->email=$request->input('email');
        $customer->image=$request->file('image');
        $customer->adresse=$request->input('adress');
        $customer->sexe=$request->input('sexe');
        $customer->num_telephone=$request->input('phone_Num');
        $customer->date_naissance=$request->input('Birthday');
        $this->uploadImage($request);
        

        $customer->update();
        Alert::success('Compte client mis à jour avec succés!');
        return redirect()->route('customer');
        
    }

    private function uploadImage(Request $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('customers','public');
        }
    }

    
    

    public function customerDelete($id){
        $customer=customers::find($id);
        if ($customer != null) {
            $customer->delete();
            return redirect()->route('customer')->with('message','Voulez-vous vraiment supprimer ce client?');        
        }
        
    }

    public function customerAdd(){
        return view('customer.customer_Add');
    }
    
    public function customerStore(Request $request){
        $request->validate([
            'login'=>'required',
            'password'=>'required',
            'name'=>'required',
            'lastName'=>'required',
            'image'=>'mimes:jpg,svg,png',
            'adress'=>'required',
            'email'=>'required|email|',
            'phone_Num'=>'required',
            'sexe'=>'required',
            'birthday'=>'required'
        ]);
        $password=$request->password;
        //hashing password et envoie du password crypté à la base de données
        $password=(Hash::make($password));
        $input=$request->all();
        
        customers::create($input);
        Alert::success('Compte client crée avec succés!');
        return redirect()->route('customer');
        
    }
    

    

}
