<div class="container" >
    <!------------   ASIDE      --------------->
    <aside >
        <div class="top" >
            <div class="logo" >
                <img src="{{asset('images/logo.png')}}" >
                <h2>Espace <span class="danger">Admin</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-symbols-outlined">
                    close
                </span>

            </div>
        </div>
        <div class="sidebar" >
            <a href="{{route('homePage')}}" class="{{setActive(['homePage'])}} navLinks " >
                <span class="material-symbols-outlined">
                    grid_view
                </span>
                <h3>Tableau de bord</h3> 
            </a>
        </div>
        <div class="sidebar" >
            <a href="{{route('employes')}}" class="{{setActive(['employes'])}} navLinks">
                <span class="material-symbols-outlined">
                    badge
                </span>
                <h3>Employés</h3>
            </a>
        </div>
        <div class="sidebar" >
            <a href="{{route('customer')}}" class=" {{setActive(['customer'])}} navLinks">
                <span class="material-symbols-outlined">
                    person
                </span>
                <h3>Clients</h3>
            </a>
        </div>
        <div class="sidebar">
            <a href="{{route('hotels')}}" class=" {{setActive(['hotels'])}} navLinks">
                <span class="material-symbols-outlined">
                    receipt_long
                </span>
                <h3>Hotels</h3>
            </a>
        </div>
        <div class="sidebar">
            <a href="{{route('offer')}}" class="{{setActive(['offer'])}} navLinks">
                <span class="material-symbols-outlined">
                    sell
                </span>
                <h3>offres</h3>
            </a>
            
        </div>
        <div class="sidebar" >
            <a href="{{route('flights')}}" class="{{setActive(['flights'])}} navLinks">
                <span class="material-symbols-outlined">
                    travel
                </span>
                <h3>Vols</h3>
            </a>
        </div>
        <div class="sidebar">
            <a href="{{route('demands')}}" class="{{setActive(['demands'])}} navLinks">
                    <span class="material-symbols-outlined">
                        import_contacts
                    </span>
                <h3>Demandes </h3>
            </a>
            
        </div>
        
        
        <div class="sidebar" >
            <a href="" class="navLinks">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <h3>Logout</h3>
            </a>
        </div>
        
    </aside>
        <!------------   END OF ASIDE      --------------->