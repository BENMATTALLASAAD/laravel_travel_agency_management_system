<x-master title="Customer_Profile"> 
        <div class="profile-card-container">
            
            <div class="profile-card">
                <div class="customer-profile-photo">
                    <img src="{{asset('images/BENMATTALLA SAAD PHOTO.jpeg')}}" alt="">          
                    <h3>{{$employe['nom'].' '.$employe['prénom']}}</h3>
                </div>
                <div class="customer-identifiants">
                    <span><b>Email  :</b>  {{$employe['email']}}</span><br><br>
                    <span><b>Login  :</b>  {{$employe['login']}}</span><br><br>
                    <span><b>Rôle  :</b>  {{$employe['role']}}</span><br>
                </div>
            </div>
            <div class="actions">
                
                <button class="primary" type="submit">
                    <a href="" >
                            <span class="material-symbols-rounded">
                                edit
                            </span> 
                            
                        </a>
                </button>
                <button class="danger" type="submit">
                    <a href="" onclick="confirmation(event)" >
                        <span class="material-symbols-rounded">
                            delete
                        </span>                 
                    </a>
                </button>
            </div>
            
        </div>

</x-master>
