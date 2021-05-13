function leapYear(year) {
    return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
}
function change_calender(){
    let month = $("#month").val();
    console.log(month);
    month31 = ["January", "March", "May",  "July", "August",  "October",  "December"];
    month30 = ["April", "June", "September",  "November"];
    if (month30.includes(month)){
        for (let i = 1; i <= 30 ; i++)
        $("#day").append(`<option> ${i}</option>`);
    }
    else if (month31.includes(month)){
        for (let i = 1 ; i <= 31 ; i++)
        $("#day").append(`<option> ${i}</option>`);
    }
    else{
        let year = $("#year").val();
        for (let i = 1 ; i <= 28 ; i++)
            $("#day").append(`<option> ${i}</option>`);
        if(!leapYear(year)){
            $("#day").append(`<option> 29</option>`);
        }
    }
}

$(document).ready(function(){
    let time = new Date();
    for (let i = 1900 ; i <= time.getFullYear() ; i ++){
        $("#year").append(`<option> ${i}</option>`);
    }
    let month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    for (let i in month){
        $("#month").append(`<option> ${month[i]}</option>`);
    }
    for (let i = 1; i <= 30; i++) {
        $("#day").append(`<option> ${i}</option>`);
    }
})
// function checklen(str, eminstr, emaxstr){
//     if (str.length > emaxstr  || str.length < eminstr){
//         return false;
//     }
//     return true;
// }
// function checkValidEmail(str){
//     let patt = /.*?@.*?\..*/g;
//     let result = patt.test(str);
//     return result;
// }
// function check(){
    
//     firstname = document.getElementById("firstname").value;
//     lastname = document.getElementById("lastname").value;
//     email = document.getElementById("email").value;
//     pwd = document.getElementById("pwd").value;
//     date = document.getElementById("date").value;
//     gender= document.getElementsByName("gender");
//     about = document.getElementById("about").value;
//     console.log(gender  )
//     mess="";
//     /*// if ((firstname.length > 30 && firstname.length < 2) || lastname.length > 30 && lastname.length < 2){
//     //     console.log("do dai ky tu")
//     // }
//     // const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     // if (!re.test(String(email).toLowerCase()) ){
//     //     console.log("gmail!!")
//     // }
//     // if (pwd.length > 30 && pwd.length < 2){
//     //     console.log("do dai mat khau")
//     // }
//     // isChecked=false;
//     // for(let i = 0 ; i <length;i++){
//     //     if (gender.isChecked()){
//     //         isChecked=true;
//     //         break;
//     //     }
//     // }*/
//     let valid = true;
//     if (!checklen(firstname,2,30)){
//         valid = false;
//         alert("first name ko h1op le");
//     }
//     if (!checklen(lastname, 2, 30)) {
//         alert("last name ko hop le");
//     }
//     if (!checkValidEmail(email)){
//         alert("email ko hop le");
//     }
//     if (!checklen(pwd, 2,30)){
//         alert("password ko hop le, 2-30 ki tu");
//     }
//     if (!checklen(about,0,10000)){
//         alert("About gioi han 10000 ki tu");
//     }
//     console.log(valid)
//     if (valid == false){
//         console.log("do something");
//     }
//     return valid;
// }