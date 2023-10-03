<x-master title="Customers"> 

<div class="tableBorders">
    
    <table class="customersTable" style="margin-top: 1rem">
        <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des Clients</h2><br>
        <span style="margin-left: 6rem;margin-top: 2rem">Rechercher un client</span><br>

        <div class="search" style="margin-top: 1rem">
            <div class="searchbar">
                
                <div class="searchIcon"> </div> 
                    <div class="input">
                        <input type="text" placeholder="Rechercher" id="searchText">  
                    </div>

            </div>
            <span class="clear" onclick="document.getElementById('searchText').value =''"></span>
            <button class="searchButton">Rechercher</button>

        </div>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>  </th>
                    <th>  </th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                    
                @foreach ($customers as $customer)
                <tr>
                    
                        <td>{{$customer['nom'].' '.$customer['prénom']}}</td>
                        <td>{{$customer['email']}}</td>
                        <td>{{$customer['num_telephone']}}</td>
                        <td>{{$customer['sexe']}}</td>
                        <td>{{$customer['date_naissance']}}</td>
                        <td>
                            <span style="visibility:hidden">Act</span>  
                        </td>
                        <td class="success">
                            <a href="{{route('customer_Profile',$customer['id'])}}">
                                <span class="material-symbols-rounded">
                                    person
                                </span> 
                            </a>
                        </td>
                        <td class="primary">
                            <a href="{{route('customer_Edit',$customer['id'])}}">
                                <span class="material-symbols-rounded">
                                    edit
                                </span> 
                            </a>
                        </td>
                        
                        <td class="danger">
                            <a href="{{route('customer_Delete',$customer['id'])}}" onclick="deleteCustomer(event)">
                                <span class="material-symbols-rounded">
                                    delete
                                </span> 
                            </a>
                        </td>
                
                   
                        
                </tr>
                @endforeach
            </tbody>

        </table>
        {{$customers->links('components.myPagination')}}
        <button class="addCustomer" style="margin-bottom: 2rem"><a href="{{route('customer_Add')}}">Ajouter Client</a></button><br>
        
  
</div>

    
</x-master>
