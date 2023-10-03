<x-master title="Customer_Edit"> 
    <div class="profileAdd-card-container">
            <form action="{{route('employes')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="primary" style="margin-left: 2rem;margin-top:2rem">Ajouter Employé</h2>
                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Nom  </span> </label>
                    <input autoFocus type="text" name="nom" placeholder="Nom"><br>

                    <label class="label"><span>Prénom  </span> </label>
                    <input type="text" name="prénom" placeholder="Prénom"><br>
                </div>

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Login </span> </label>
                    <input type="email" name="login" placeholder="Login"><br>

                    <label class="label"><span>Mot de passe </span> </label>
                    <input type="password" name="password" placeholder="Mot de passe"><br>
                </div>

                

                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Email  </span> </label>
                    <input type="email" name="email" placeholder="Email"><br>
                    
                    <label class="label"><span>Image  </span> </label>
                    <input type="file" name="image" placeholder="Image"><br>
                </div>
                <div class="group" style="display: flex;margin-top:2rem">
                    <label class="label"><span>Rôle  </span> </label>
                    <input type="text" name="role" placeholder="Rôle"><br>
                </div>

                <button type="submit">Ajouter</button>
            </form>
    </div>
            
</x-master>
