//JavaScript For Scroll Bottom..


var mybutton = document.getElementById("btnscorll");
 window.onscroll = function(){
    scrollFunction()
};

function scrollFunction(){
   if( document.body.scrollTop >20 ||document.documentElement.scrollTop >20) {
       mybutton.style.display= "block";
       
   }
    else{
        mybutton. mybutton.style.display= "none";
    }
}
 function topFunction(){
     document.body.scrollTop=0;
     document.documentElement.scrollTop= 0;
 }



   //Function for login form
           
function validate(){
var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var massage=document.getElementById("msg").value;
     
if(name==null || name==""){
alert("Please enter your name.");
return false;
}
     
if(email==null || email==""){
alert("Please enter your email.");
return false;
}
    
if (massage==null || massage==""){
alert("Please enter your massage.");
 return false;
}
alert('Thank You , Your message has been received');
}
   

   //for scroll header 
 window.addEventListener("scroll", function(){
     var header = document.querySelector("header");
     header.classList.toggle("sticky", window.scrollY > 15);
 });


// menu bar active
const navSlid = ()=> {
const menuIcon = document.querySelector('.menuIcon');
const navMenu  = document.querySelector('.nav-menu');

menuIcon.addEventListener("click" , ()=> {
    menuIcon.classList.toggle('active');
    navMenu.classList.toggle('active');
});

//navlick remove
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", ()=>{
    menuIcon.classList.remove("active");
    navMenu.classList.remove("active");
}));

}

navSlid();

//typing text animation script
var typed = new Typed('.typing', {
    strings: ['Web Developer', 'Designer', 'Freelancer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});

