function login(value){
    if (value == "login"){
        document.getElementById('login').style.visibility = visibility;
        document.getElementById('signUp').style.visibility = hidden;
        document.getElementById('trainerSignUp').style.visibility = hidden;
    } else if (value == "signUp"){
        document.getElementById('login').style.visibility = hidden;
        document.getElementById('signUp').style.visibility = visibility;
        document.getElementById('trainerSignUp').style.visibility = hidden;
    } else if (value == "login"){
        document.getElementById('login').style.visibility = hidden;
        document.getElementById('signUp').style.visibility = hidden;
        document.getElementById('trainerSignUp').style.visibility = visibility;
    }

}