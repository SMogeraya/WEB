function signup(){
    sign=document.getElementById("fsignup");
    log=document.getElementById("flogin");

    sign.addEventListener("click" ,()=>{
sign.style.display='flex';
log.style.display='none';
})
}


function login()
{   sign=document.getElementById("fsignup");
    log=document.getElementById("flogin");

    log.addEventListener("click",()=>
    {
        sign.style.display='none';
        log.style.display='flex';
    })

}