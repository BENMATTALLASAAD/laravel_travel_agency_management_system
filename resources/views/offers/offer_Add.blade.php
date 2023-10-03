<x-master title="offers">   
    
    <div class="hotel_Add-container">
        <form action="{{route('offers')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="primary"style="margin-top: 2rem;margin-left:2rem">Ajouter offre</h2>
            <div class="group">
                <label class="label"><span>Nom  </span> </label>
                <input autofocus type="text" name="nom_offre" placeholder="Nom"><br>

                <label class="label"><span>Date de départ  </span> </label>
                <input type="Date" name="date_depart" placeholder="Date de départ"><br>
            </div>
            
            <div class="group">
                <label class="label"><span>Destination </span> </label>
                <input type="text" name="destination_offre" placeholder="Destination"><br>

                <label class="label"><span>Image  </span> </label>
                <input type="file" name="image"><br>
            </div>


            <div class="group"> 
                <label class="label"><span>Durée </span> </label>
                <input type="number" name="durée_offre" placeholder="Durée"><br>

                <label class="label"><span>Prix </span> </label>
                <input type="decimal" name="prix_offre" placeholder="Prix"><br> 
            </div>

            <div class="group"> 
                <label class="label"><span>Nombre de personnes </span> </label>
                <input type="number" name="nbr_personnes" placeholder="Nombre de personnes"><br> 
            </div>
            


            <button type="submit">Ajouter</button>
        </form>
</div>
    
       
    
 </x-master>
