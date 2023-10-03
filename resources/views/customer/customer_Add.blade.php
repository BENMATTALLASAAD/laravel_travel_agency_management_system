<x-master title="Customer_Edit"> 
    <div class="profileAdd-card-container">
            <form action="{{route('customer_Store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="primary" style="margin-left: 2rem;margin-top:2rem">Ajouter client</h2>
                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Login </span> </label>
                    <input autoFocus type="email" name="login" placeholder="Login"><br>

                    <label class="label"><span>Mot de passe </span> </label>
                    <input type="password" name="password" placeholder="Mot de passe"><br>
                </div>

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Nom  </span> </label>
                    <input type="text" name="name" placeholder="Nom"><br>

                    <label class="label"><span>Prénom  </span> </label>
                    <input type="text" name="lastName" placeholder="Prénom"><br>
                </div>

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Email  </span> </label>
                    <input type="email" name="email" placeholder="Email"><br>

                    <label class="label"><span>Image  </span> </label>
                    <input type="file" name="image" placeholder="Image"><br>
                </div>

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Adresse </span> </label>
                    <input type="text" name="adress" placeholder="Adresse"><br>

                    <label class="label"><span>Téléphone </span> </label>
                    <input type="number" name="phone_Num" placeholder="Telephone"><br>
                </div>

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Sexe </span> </label>
                    <select name="sexe" id="sexe">
                        <option value="">Choisir le sexe</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                    <br>

                    <label class="label"><span>Date de naissance </span> </label>
                    <input type="date" name="birthday" ><br>
                </div>
                
                
                

                

                

                <button type="submit">Ajouter</button>
            </form>
    </div>
            
</x-master>
