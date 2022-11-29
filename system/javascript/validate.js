//      student validate

function validate(){
    let id=document.forms["student"]["uname"].value;
    let pass=document.forms["student"]["passw"].value;
if(id == ""){
    alert("please enter the username");
    return false;
}   
if(pass == ""){
    alert("please enter the password");
    return false;
}
}

//      admin validate

function validateadmin(){
    let id=document.forms["admin-form"]["adminid"].value;
    let pass=document.forms["admin-form"]["adminpass"].value;
if(id == ""){
    alert("please enter the username");
    return false;
}   
if(pass == ""){
    alert("please enter the password");
    return false;
}
}

//      faculty validate

function validatefaculty(){
    let id=document.forms["faculty-login"]["facultyid"].value;
    let pass=document.forms["faculty-login"]["facultypass"].value;
if(id == ""){
    alert("please enter the username");
    return false;
}   
if(pass == ""){
    alert("please enter the password");
    return false;
}
}