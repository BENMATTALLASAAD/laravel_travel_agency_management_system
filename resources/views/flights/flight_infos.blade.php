<x-master title="flights">   
    
    <div class="hotelsContainer">
        <div class="hotelInfos">
            <div class="hotelImage">
                <h3>{{$flight['id_vol']}}</h3>
                <a href="" class="primary"><span> </span></a><br>
                <span class="primary"> </span>
                
            </div>
            
            <div class="categorie_hotel">
                <span class="primary">Destination : </span><span style="margin-left:1rem"> {{$flight['destination']}}</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Date de départ : </span><span style="margin-left:1rem"> {{$flight['date_vol']}} </span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Compagnie : </span><span style="margin-left:1rem"> {{$flight['compagnie']}}</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Nombre de personnes : </span><span style="margin-left:1rem"> {{$flight['nbr_places']}} personnes</span>
            </div><br>
            <div class="categorie_hotel">
                <span class="primary">Prix : </span><span style="margin-left:1rem"> {{$flight['prix']}} $</span>
            </div><br>
            
            

        </div>
        <div class="hotelsActions">
                
            <button class="primary" type="submit">
                <a href="{{route('flight_Edit',$flight['id'])}}" >
                        <span class="material-symbols-rounded">
                            edit
                        </span> 
                        
                    </a>
            </button>
            <button class="danger" type="submit">
                <a href="{{route('flight_Delete',$flight['id'])}}" onclick="confirmation(hotel)" >
                    <span class="material-symbols-rounded">
                        delete
                    </span>                 
                </a>
            </button>
        </div>
    </div>  
    
       
    
 </x-master>
