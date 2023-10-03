<x-master title="Create Hotel"> 
    <div class="hotel_Add-container">
            <form action="{{route('hotels')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="primary"style="margin-top: 2rem;margin-left:2rem">Ajouter Hotel</h2>
                <div class="group">
                    <label class="label"><span>Nom  </span> </label>
                    <input type="text" name="nom_hotel" value="" placeholder="Nom"><br>

                    <label class="label"><span>Adresse  </span> </label>
                    <input type="text" name="adresse_hotel" value="" placeholder="Adresse"><br>
                </div>
                
                <div class="group">
                    <label class="label"><span>Image  </span> </label>
                    <input type="file" name="image" value=""><br>
                
                    <label class="label"><span>Email  </span> </label>
                    <input type="email" name="email_hotel" value="" placeholder="Email"><br>
                </div>

                <div class="group">    
                    <label class="label"><span>Site web </span> </label>
                    <input type="text" name="website_hotel" value="" placeholder="Site web"><br>

                    <label class="label"><span>Catégorie  </span> </label>
                    <input type="text" name="catégorie_hotel" value="" placeholder="Catégorie"><br>
                

                </div>



                <div class="group"> 
                    <label class="label"><span>Prix/Nuitée </span> </label>
                    <input type="price" name="prix_hotel" value="" placeholder="Prix"><br> 


                </div>

                

               

                

                <button type="submit">Ajouter</button>
            </form>
    </div>
            
</x-master>
