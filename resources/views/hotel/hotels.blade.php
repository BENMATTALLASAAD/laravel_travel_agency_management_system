<x-master title="Hotels"> 

<div class="tableBorders">
    <table class="hotelsTable" style="margin-top: 1rem">
        <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des hotels</h2><br>

        <div style="margin-left: 6rem"><span >Rechercher un hotel</span><br></div>

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
                    <th>Adresse</th>
                    <th>Catégorie</th>
                    <th>Email</th>
                    <th>Prix</th>
                    <th>  </th>
                    <th>  </th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($hotels as $hotel)
                <tr>
                        <td>{{$hotel['nom_hotel']}}</td>
                        <td>{{$hotel['adresse_hotel']}}</td>
                        <td>{{$hotel['catégorie_hotel']}} </td>
                        <td>{{$hotel['email_hotel']}} </td>
                        <td>{{$hotel['prix_hotel']}} $/night</td>
                        <td>
                            <span style="visibility:hidden">Act</span>  
                        </td>
                        <td class="success">
                            <a href="{{route('hotel_infos',$hotel['id'])}}">
                                <span class="material-symbols-outlined">
                                    receipt_long
                                </span> 
                            </a>
                        </td>
                        <td class="primary">
                            <a href="{{route('hotel_Edit',$hotel['id'])}}">
                                <span class="material-symbols-rounded">
                                    edit
                                </span> 
                            </a>
                        </td>
                        
                        <td class="danger">
                            <a href="{{route('hotel_Delete',$hotel['id'])}}" onclick="deleteHotel(hotel)">
                                <span class="material-symbols-rounded">
                                    delete
                                </span> 
                            </a>
                        </td>
                
                   
                        
                </tr>
                @endforeach
            </tbody>

        </table>
        
    <button class="addHotel"><a href="{{route('hotel_Create')}}">Ajouter Hotel</a></button><br>
        

</div>    
</x-master>
