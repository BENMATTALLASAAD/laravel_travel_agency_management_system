<x-master title="Customer_Profile"> 
        <div class="profile-card-container">
            
            <div class="profile-card">
                <div class="customer-profile-photo">
                    <img src="{{asset('images/customerPhoto.jpg')}}" alt="customerImage">          <!-----{{$customer['image']}}----->
                    <h3>{{$customer['nom'].' '.$customer['prénom']}}</h3>
                </div>
                <div class="customer-identifiants">
                    <span><b>Email :  </b>  {{$customer['email']}}</span><br><br>
                    <span><b>Adresse :  </b>  {{$customer['adresse']}}</span><br><br>
                    <span><b>Numéro de téléphone  :</b>  {{$customer['num_telephone']}}</span><br><br>
                    <span><b>Sexe  :</b>  {{$customer['sexe']}}</span><br><br>
                    <span><b>Date de naissance  :</b>  {{$customer['date_naissance']}}</span><br>
                </div>
            </div>
            <div class="actions">
                
                <button class="primary" type="submit">
                    <a href="{{route('customer_Edit',$customer['id'])}}" >
                            <span class="material-symbols-rounded">
                                edit
                            </span> 
                            
                        </a>
                </button>
                <button class="danger" type="submit">
                    <a href="{{route('customer_Delete',$customer['id'])}}" onclick="deleteCustomer(event)" >
                        <span class="material-symbols-rounded">
                            delete
                        </span>                 
                    </a>
                </button>
            </div>
            
        </div>

</x-master>
