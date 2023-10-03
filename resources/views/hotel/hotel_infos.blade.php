<x-master title="Hotel_Infos">
        <div class="hotelsContainer">
            <div class="hotelInfos">
                <div class="hotelImage">
                    <img src="{{asset('images/SONDER_VASANTA-Barcelona-Exterior_view-3-563998.jpg')}}" alt="">
                    <h3>{{($hotel['nom_hotel'])}}</h3><br>
                    <b style="margin-right: 1rem">Website: </b><a href="" class="primary" ><span>{{($hotel['website_hotel'])}} </span></a><br>
                    <b style="margin-right: 1rem">Email: </b><span class="primary"> {{($hotel['email_hotel'])}} </span>
                    
                </div>
                
                <div class="categorie_hotel">
                    <span> <b style="margin-right: 1rem">Prix:</b>$ {{($hotel['prix_hotel'])}} /night | 3</span>
                    <img src="{{asset('images/Star.jpg')}}" alt=""> </span>  
                    <a href="" class="primary" style="margin-left: 1rem;margin-top:0.2rem"> (153reviews)</a>
                </div><br>
                <small class="text-muted">Lounge, tour & treks,Indoor games,24/7 Wifi,parking,Swimming pool & <a href="" class="primary">More</a> </small><br>
                <span class="warning"> Free cancellation  <span style="margin:0 1rem 0 1rem">|</span> Pay on arrive  <span style="margin:0 1rem 0 1rem">|</span> Complementary breakfast</span>
            </div>
            <div class="hotelsActions">
                    
                <button class="primary" type="submit">
                    <a href="{{route('hotel_Edit',$hotel['id'])}}" >
                            <span class="material-symbols-rounded">
                                edit
                            </span> 
                            
                        </a>
                </button>
                <button class="danger" type="submit">
                    <a href="{{route('hotel_Delete',$hotel['id'])}}" onclick="confirmation(hotel)" >
                        <span class="material-symbols-rounded">
                            delete
                        </span>                 
                    </a>
                </button>
            </div>
        </div>   
   

</x-master> 