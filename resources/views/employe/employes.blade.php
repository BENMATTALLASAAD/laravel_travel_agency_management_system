<x-master title="Employés"> 

    <div class="tableBorders">
    
    <table class="customersTable">
        <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des employés</h2><br>

        <div style="margin-left: 6rem"><span >Rechercher un employé</span><br></div>
        
        <div class="search" style="margin-top: 2rem;margin-bottom: 4rem">
            <div class="searchbar">
                
                <div class="searchIcon"> </div> 
                    <div class="input">
                        <input type="text" placeholder="Rechercher" id="searchText">  
                    </div>

            </div>
            <span class="clear" onclick="document.getElementById('searchText').value =''"></span>
            <button class="searchButton">Rechercher </button>

        </div>
        
            <thead>
                <tr></tr>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>  </th>
                    <th>  </th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                    
                @foreach ($employes as $employe)
                <tr>
                    <td>{{$employe['nom']}}</td>
                    <td>{{$employe['prénom']}}</td>
                    <td>{{$employe['email']}}</td>
                    <td>{{$employe['role']}}</td>
                    
                        <td>
                            <span style="visibility:hidden">Act</span>  
                        </td>
                        <td class="success">
                            <a href="{{route('employe_Profile',$employe['id'])}}">
                                <span class="material-symbols-rounded">
                                    person
                                </span> 
                            </a>
                        </td>
                        <td class="primary">
                            <a href="{{route('employe_Edit',$employe['id'])}}">
                                <span class="material-symbols-rounded">
                                    edit
                                </span> 
                            </a>
                        </td>
                        
                        <td class="danger">
                            <a href="{{route('employe_Delete',$employe['id'])}}" onclick="confirmation(event)">
                                <span class="material-symbols-rounded">
                                    delete
                                </span> 
                            </a>
                        </td>
                
                   
                        
                </tr>
            </tbody>
            @endforeach
        </table>
        <button class="addCustomer" style="margin-bottom: 2rem"><a href="{{route('employe_Create')}}">Ajouter Employé</a></button><br>
    </div>
        
  
        

    
</x-master>
