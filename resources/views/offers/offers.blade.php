<x-master title="offers">   
    
    <div class="tableBorders">
        <table class="hotelsTable" style="margin-top: 1rem">
            <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des offres</h2><br>
    
            <div style="margin-left: 6rem"><span >Rechercher une offre</span><br></div>
    
            <div class="search" style="margin-top: 1rem">
                <div class="searchbar">
                    
                    <div class="searchIcon"> </div> 
                        <div class="input">
                            <input type="text" placeholder="Rechercher" id="searchText">  
                        </div>
    
                </div>
                <span class="clear" onclick="document.getElementById('searchText').value =''"></span>
                <button class="searchButton">Rechercher</button>
    
            </div>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Destination</th>
                        <th>Durée(jours)</th>
                        <th>Date de départ</th>
                        <th>Prix($)</th>
                        
                        <th>  </th>
                        <th>  </th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offers as $offer)
                    <tr>
                            <td>{{$offer['nom_offre']}}</td>
                            <td>{{$offer['destination_offre']}}</td>
                            <td>{{$offer['durée_offre']}}</td>
                            <td>{{$offer['date_depart']}}</td>
                            <td>{{$offer['prix_offre']}}</td>
                            <td>
                                <span style="visibility:hidden">Act</span>  
                            </td>
                            <td class="success">
                                <a href="{{route('offer_infos',$offer['id'])}}">
                                    <span class="material-symbols-outlined">
                                        sell
                                    </span>
                                </a>
                            </td>
                            <td class="primary">
                                <a href="{{route('offer_Edit',$offer['id'])}}">
                                    <span class="material-symbols-rounded">
                                        edit
                                    </span> 
                                </a>
                            </td>
                            
                            <td class="danger">
                                <a href="{{route('offer_Delete',$offer['id'])}}" onclick="deleteHotel(hotel)">
                                    <span class="material-symbols-rounded">
                                        delete
                                    </span> 
                                </a>
                            </td>
                    
                       
                            
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
            
        <button class="addHotel"><a href="{{route('offer_Create')}}">Ajouter Offre</a></button><br>
            
    
    </div>    
    
       
    
 </x-master>
