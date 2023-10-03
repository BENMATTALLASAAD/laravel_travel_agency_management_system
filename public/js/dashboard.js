const sideMenu =document.querySelector("aside");
const menuBtn =document.querySelector("#menu-btn");
const closeBtn =document.querySelector("#close-btn");
const themeToggler =document.querySelector(".theme-toggler");

/*const sideLinks =document.getElementsByClassName('navLinks');

//changing active sidelink
for (var i = 0; i < sideLinks.length; i++) {
    sideLinks[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
  
      // If there's no active class
      if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
    }
    // Add the active class to the current/clicked link
    this.className += " active";
});
}*/



menuBtn.addEventListener('click',()=>{
    sideMenu.style.display='block';
})
closeBtn.addEventListener('click',()=>{
    sideMenu.style.display='none';
})
themeToggler.addEventListener('click',()=>{
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active'); 
})


document.querySelectorAll("#navLinks").onclick = function(){
    const h1=document.querySelector('h1:first-child');
    const a=document.querySelector('h3').innerHTML();
    h1.innerText()=a;
}

let link=document.getElementsByClassName("link");
let currentValue = 1;
function activeLink(){
    for(l of link){
        l.classList.remove("active");
    }
    event.target.classList.add("active");
    currentValue=event.target.value;
}
function backBtn(){
    if(currentValue > 1){
        for(l of link){
            l.classList.remove("active");
        }
        currentValue--;
        link[currentValue-1].classList.add("active");
    }
}

function nextBtn(){
    if(currentValue < 6){
        for(l of link){
            l.classList.remove("active");
        }
        currentValue++;
        link[currentValue-1].classList.add("active");
    }
}

function deleteCustomer(ev){
    ev.preventDefault();
    var urlToRedirect=ev.currentTarget.getAttribute('href') ;

    console.log(urlToRedirect);
    swal({
        title : "Voulez-vous vraiment supprimer ce client?",


        icon : "warning",

        buttons : true,

        dangerMode : true,

    })
    .then((willCancel)=>
    {
       if(willCancel){
        window.location.href=urlToRedirect;
       }

    });
    
}


const icon = document.querySelector('searchIcon');
const search = document.querySelector('searchbar');
icon.onclick=function(){
    search.classList.toggle('active');
}

function deleteHotel(hotel){
    hotel.preventDefault();
    var urlToRedirect=hotel.currentTarget.getAttribute('href') ;

    console.log(urlToRedirect);
    swal({
        title : "Voulez-vous vraiment supprimer cet hotel?",

        

        icon : "warning",

        buttons : true,

        dangerMode : true,

    })
    .then((willCancel)=>
    {
       if(willCancel){
        window.location.href=urlToRedirect;
       }

    });
    
}

