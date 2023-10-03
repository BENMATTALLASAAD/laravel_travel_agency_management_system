<x-master title="offers">   
    
    <div class="hotel_Add-container">
        <form action="{{route('offers')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="primary"style="margin-top: 2rem;margin-left:2rem">Modifier vol</h2>
            <div class="group">
                <label class="label"><span>Id vol  </span> </label>
                <input autofocus type="text" name="id_vol" value="{{$flight['id_vol']}}"><br>

                <label class="label"><span>Date de départ </span> </label>
                <input type="date" name="date_depart" value="{{$flight['date_depart']}}"><br>
                
            </div>
            
            <div class="group">
                <label class="label"><span>Destination  </span> </label>
                <input type="text" name="destination" value="{{$flight['destination']}}"><br>

                <label class="label"><span>Compagnie  </span> </label>
                <input autofocus type="text" name="compagnie" value="{{$flight['compagnie']}}"><br>
            </div>


            <div class="group"> 
                <label class="label"><span>Nombre de places </span> </label>
                <input type="number" name="nbr_places" value="{{$flight['nbr_places']}}"><br>

                <label class="label"><span>Prix </span> </label>
                <input type="decimal" name="prix" value="{{$flight['prix']}}"><br> 
            </div>

            
            


            <button type="submit">Modifier</button>
        </form>
</div>
    
       
    
 </x-master>
