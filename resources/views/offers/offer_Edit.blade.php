<x-master title="offers">   
    
    <div class="hotel_Add-container">
        <form action="{{route('offers')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="primary"style="margin-top: 2rem;margin-left:2rem">Modifier offre</h2>
            <div class="group">
                <label class="label"><span>Nom  </span> </label>
                <input autofocus type="text" name="nom_offre"  value="{{$offer['nom_offre']}}"><br>

                <label class="label"><span>Date de départ  </span> </label>
                <input type="Date" name="date_depart"  value="{{$offer['date_depart']}}"><br>
            </div>
            
            <div class="group">
                <label class="label"><span>Destination </span> </label>
                <input type="text" name="destination_offre"  value="{{$offer['destination_offre']}}"><br>

                <label class="label"><span>Image  </span> </label>
                <input type="file" name="image" value="{{$offer['image_offre']}}"><br>
            </div>


            <div class="group"> 
                <label class="label"><span>Durée </span> </label>
                <input type="number" name="durée_offre"  value="{{$offer['durée_offre']}}"><br>

                <label class="label"><span>Prix </span> </label>
                <input type="price" name="prix_offre"  value="{{$offer['prix_offre']}}"><br> 
            </div>

            <div class="group"> 
                <label class="label"><span>Nombre de personnes </span> </label>
                <input type="number" name="nbr_personnes"  value="{{$offer['nbr_personnes']}}"><br> 
            </div>
            


            <button type="submit">Modifier</button>
        </form>
</div>
    
       
    
 </x-master>
