<x-master title="Demands">   
    <div class="date">
        <input type="date" value="2023-08-09" >
    </div>
    <div class="tableBorders">
        
        
        <table class="hotelsTable" style="margin-top: 1rem">
            <h2 style="color:var(--color-primary);margin-left: 3rem;margin-top: 2rem">Liste des demandes</h2><br>
            
            <div style="margin-left: 6rem"><span >Rechercher une demande</span><br></div>
    
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
                        <th>Référence</th>
                        <th>Client</th>
                        <th>Type</th>
                        <th>Date</th>
                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($demands as $demand)
                    <tr>
                            <td>{{$demand['reference']}}</td>
                            <td>{{$demand['client']}}</td>
                            <td>{{$demand['type_demande']}}</td>
                            <td>{{$demand['date_demande']}}</td>
                            
                            
                            
                            <td>
                                <button class="consulter" type="submit" style="margin-left:-2rem">
                                    <a href="">
                                        <span>Consulter</span>
                                    </a>
                                </button>
                                
                            </td>
                            <td>
                                <button class="valider" type="submit" style="margin-left:-2rem">
                                    <a href="">
                                        <span>Valider</span>
                                    </a>
                                </button>
                                
                            </td>
                            <td>
                                <button class="annuler" type="submit" style="margin-left:-2rem">
                                    <a href="">
                                        <span>Annuler</span>
                                    </a>
                                </button>
                                
                            </td>
                            
                            
                    
                       
                            
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
            
            
    
    </div>
    
       
    
</x-master>
