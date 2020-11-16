document.getElementById('Storeback').onsubmit = function(){
    let username=document.getElementById('username');
    let password=document.getElementById('password');
    let phone=document.getElementById('Phone');
    let phone2=document.getElementById('Phone2');
    let phone3=document.getElementById('Phone3');
    let phone4=document.getElementById('Phone4');
    let shipping1=document.getElementById('7days');
    let shipping2=document.getElementById('overnight');
    let shipping3=document.getElementById('3days');
    let emailformat= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
 if(phone.value=="" || phone2.value=="" || phone3.value=="" || phone4.value=="")   {
     alert("Input No of Phones");
     return(false);
 }
 else if(phone.value<0 || phone2.value<0 || phone3.value<0 || phone4.value<0){
     alert("Input for no of phones can't be negative");
     return(false);
 }

 if(password.value==""){
     alert("Please enter the password");
     return(false);
 }
 if(!shipping1.checked && !shipping2.checked && !shipping3.checked){
     alert("Please Select one of the Shipping Option");
     return(false);
 }
 if(username.value=="")
 {
     alert("Please enter username");
     return(false);
 }
 if(!emailformat.test(username.value)){
    alert("You have entered an invalid email address! (It should be like username@domain.com)");
    username.focus;
    return (false);
 }


}
function Reset(){
     document.getElementById("username").value="";
     document.getElementById("password").value="";
     document.getElementById("Phone").value="";
     document.getElementById("Phone2").value="";
     document.getElementById("Phone3").value="";
     document.getElementById("Phone4").value="";
    document.getElementById('7days').checked=false;
    document.getElementById('overnight').checked=false;
    document.getElementById('3days').checked=false;
}
