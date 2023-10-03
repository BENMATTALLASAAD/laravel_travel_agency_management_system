<x-master title="Edit Hotel">
    <div class="hotel_Edit-container">
            <form action="{{route('hotel_Update',$hotel['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2 class="primary" style="margin-top: 2rem;margin-left:2rem">Modifier Hotel</h2>

                <div class="group">
                    <label class="label"><span>Nom </span> </label>
                    <input type="text" name="nom_hotel" value="{{$hotel['nom_hotel']}}" ><br>

                    <label class="label"><span>Adresse  </span> </label>
                    <input type="text" name="adresse_hotel" value="{{$hotel['adresse_hotel']}}" ><br>
                </div>
                
                <div class="group">
                    <label class="label"><span>Image  </span> </label>
                    <input type="file" name="image"  value="{{$hotel['image']}}"><br>
                
                    <label class="label"><span>Email : </span> </label>
                    <input type="email" name="email_hotel" value="{{$hotel['email_hotel']}}"><br>
                </div>

                <div class="group">
                    <label class="label"><span>Site web </span> </label>
                    <input type="text" name="website_hotel" value="{{$hotel['website_hotel']}}"><br>

                    <label class="label"><span>Catégorie </span> </label>
                    <input type="text" name="catégorie_hotel" value="{{$hotel['catégorie_hotel']}}"><br>
                </div>

                

                <div class="group">
                    

                    <label class="label"><span>Prix/nuitée </span> </label>
                    <input type="price" name="prix_hotel" value="{{$hotel['prix_hotel']}}"><br> 
                </div>

                

               

                

                <button type="submit">Modifier</button>
            </form>
    </div>
</x-master>
