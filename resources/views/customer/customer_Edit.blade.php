<x-master title="Customer_Edit"> 
        
        <div class="profileEdit-card-container">
                <form action="{{route('customer_update',$customer['id'])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="primary" style="margin-left: 2rem;margin-top:2rem">Modifier client</h2>
                    <div class="group" >
                        <label class="label"><span>Nom  </span> </label>
                        <input autoFocus type="text" name="name" value="{{$customer['nom']}}"><br>
                    
                        <label class="label"><span>Prénom  </span> </label>
                        <input type="text" name="lastName" value="{{$customer['prénom']}}"><br>
                    </div>
                    
                    <div class="group" >
                        <label class="label"><span>login  </span> </label>
                        <input type="email" name="login" value="{{$customer['login']}}"><br>
                    
                        <label class="label"><span>Email  </span> </label>
                        <input type="email" name="email" value="{{$customer['email']}}"><br>
                    </div>

                    <div class="group" >
                        <label class="label"><span>Image  </span> </label>
                        <input type="file" name="image" value="{{$customer['image']}}"><br>

                        <label class="label"><span>Adresse </span> </label>
                        <input type="text" name="adress" value="{{$customer['adresse']}}"><br>
                    </div>

                    <div class="group" >
                        <label class="label"><span>Téléphone </span> </label>
                        <input type="text" name="phone_Num" value="{{$customer['num_telephone']}}"><br>

                        <label class="label"><span>Sexe </span> </label>
                        <select name="sexe" id="sexe">
                            <option value="" id="customer_Sexe">{{$customer['sexe']}}</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                        <br>
                        
                    </div>

                    <label class="label"><span>Date de naissance </span> </label>
                    <input type="date" name="Birthday" value="{{$customer['date_naissance']}}"><br>

                    <button type="submit">Modifier</button>
                </form>
        </div>
                
</x-master>
