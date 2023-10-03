<x-master title="Customer_Edit"> 
        
        <div class="profileEdit-card-container">
                <form action="{{route('employe_update',$employe['id'])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="primary" style="margin-left: 2rem;margin-top:2rem">Modifier compte employé</h2>
                    <div class="group" style="display: flex;margin-top:2rem">
                        <label class="label"><span>Nom  </span> </label>
                        <input autoFocus type="text" name="nom" placeholder="Nom" value="{{$employe['nom']}}"><br>
    
                        <label class="label"><span>Prénom  </span> </label>
                        <input type="text" name="prénom" placeholder="Prénom" value="{{$employe['prénom']}}"><br>
                    </div>
    
                    <div class="group" style="display: flex;margin-top:2rem">
                        <label class="label"><span>Login </span> </label>
                        <input type="email" name="login" placeholder="Login" value="{{$employe['login']}}"><br>
                        
                        <label class="label"><span>Rôle  </span> </label>
                        <input type="text" name="role" placeholder="Rôle" value="{{$employe['role']}}"><br>
                    </div>
    
                    
    
                    <div class="group" style="display: flex;margin-top:2rem">
                        <label class="label"><span>Email  </span> </label>
                        <input type="email" name="email" placeholder="Email" value="{{$employe['email']}}"><br>
                        
                        <label class="label"><span>Image  </span> </label>
                        <input type="file" name="image" placeholder="Image" value="{{$employe['image']}}"><br>
                    </div>
                   
    
                    <button type="submit">Modifier</button>
                </form>
        </div>
                
</x-master>
