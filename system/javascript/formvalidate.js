function func(){
    let x=document.getElementsByName("roll");

    let mess;
    if(isNaN(x)){
        mess="roll number must be in number";
    }
    else{
        mess="ok";
    }
    document.getElementById("err").innerHTML = mess;
}