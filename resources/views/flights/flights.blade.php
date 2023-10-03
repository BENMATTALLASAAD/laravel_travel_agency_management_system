<x-master title="flights">   
    
    <div class="tableBorders">
        <table class="hotelsTable" style="margin-top: 1rem">
            <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des vols</h2><br>
    
            <div style="margin-left: 6rem"><span >Rechercher un vol</span><br></div>
    
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
                        <th>Id</th>
                        <th>Destination</th>
                        <th>Date de départ</th>
                        <th>Commpagnie</th>
                        <th>Nombres de personnes</th>
                        <th>Prix($)</th>
                        
                        <th>  </th>
                        <th>  </th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flights as $flight)
                    <tr>
                            <td>{{$flight['id_vol']}}</td>
                            <td>{{$flight['destination']}}</td>
                            <td>{{$flight['date_vol']}}</td>
                            <td>{{$flight['compagnie']}}</td>
                            <td>{{$flight['nbr_places']}}</td>
                            <td>{{$flight['prix']}}</td>
                            <td>
                                <span style="visibility:hidden">Act</span>  
                            </td>
                            <td class="success">
                                <a href="{{route('flight_infos',$flight['id'])}}">
                                    <span class="material-symbols-outlined">
                                        sell
                                    </span>
                                </a>
                            </td>
                            <td class="primary">
                                <a href="{{route('flight_Edit',$flight['id'])}}">
                                    <span class="material-symbols-rounded">
                                        edit
                                    </span> 
                                </a>
                            </td>
                            
                            <td class="danger">
                                <a href="{{route('flight_Delete',$flight['id'])}}" onclick="deleteHotel(hotel)">
                                    <span class="material-symbols-rounded">
                                        delete
                                    </span> 
                                </a>
                            </td>
                    
                       
                            
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
            
        <button class="addHotel"><a href="{{route('flight_Create')}}">Ajouter vol</a></button><br>
            
    
    </div>    
    
       
    
 </x-master>
