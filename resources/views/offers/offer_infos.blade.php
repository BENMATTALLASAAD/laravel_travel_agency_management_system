<x-master title="offers">   
    
    <div class="hotelsContainer">
        <div class="hotelInfos">
            <div class="hotelImage">
                <img src="{{asset('images/rome.jpg')}}" alt="">
                <h3>{{$offer['nom_offre']}}</h3>
                <a href="" class="primary"><span> </span></a><br>
                <span class="primary"> </span>
                
            </div>
            
            <div class="categorie_hotel">
                <span class="primary">Destination : </span><span style="margin-left:1rem"> {{$offer['destination_offre']}}</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Durée : </span><span style="margin-left:1rem"> {{$offer['durée_offre']}} jours</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Date de départ : </span><span style="margin-left:1rem"> {{$offer['date_depart']}}</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Nombre de personnes : </span><span style="margin-left:1rem"> {{$offer['nbr_personnes']}} personnes</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Prix : </span><span style="margin-left:1rem"> {{$offer['prix_offre']}} $</span>
            </div><br>
            
            

        </div>
        <div class="hotelsActions">
                
            <button class="primary" type="submit">
                <a href="{{route('offer_Edit',$offer['id'])}}" >
                        <span class="material-symbols-rounded">
                            edit
                        </span> 
                        
                    </a>
            </button>
            <button class="danger" type="submit">
                <a href="{{route('offer_Delete',$offer['id'])}}" onclick="confirmation(hotel)" >
                    <span class="material-symbols-rounded">
                        delete
                    </span>                 
                </a>
            </button>
        </div>
    </div>  
    
       
    
 </x-master>
