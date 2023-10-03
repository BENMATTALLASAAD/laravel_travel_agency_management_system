<x-master title="flights">   
    
    <div class="hotel_Add-container">
        <form action="{{route('flights')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="primary"style="margin-top: 2rem;margin-left:2rem">Ajouter vol</h2>
            <div class="group">
                <label class="label"><span>Id vol  </span> </label>
                <input autofocus type="text" name="id_vol" placeholder="Id vol"><br>

                <label class="label"><span>Date de départ </span> </label>
                <input type="Date" name="date_depart" placeholder="Date de départ"><br>
                
            </div>
            
            <div class="group">
                <label class="label"><span>Destination  </span> </label>
                <input type="text" name="destination" placeholder="Destination"><br>

                <label class="label"><span>Compagnie  </span> </label>
                <input autofocus type="text" name="compagnie" placeholder="compagnie"><br>
            </div>


            <div class="group"> 
                <label class="label"><span>Nombre de places </span> </label>
                <input type="number" name="nbr_places" placeholder="Nombre de places"><br>

                <label class="label"><span>Prix </span> </label>
                <input type="decimal" name="prix" placeholder="Prix"><br> 
            </div>

            
            


            <button type="submit">Ajouter</button>
        </form>
</div>
    
       
    
 </x-master>
