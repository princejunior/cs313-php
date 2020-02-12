function login(value){
    if( value == "login"){
        document.getElementById("login").style.display = block;
        document.getElementById("signUp").style.display = none;
        document.getElementById("trainerSignUp").style.display = none;
        // document.getElementById("login").style.visibility = visibility;
        // document.getElementById("signUp").style.visibility = hidden;
        // document.getElementById("trainerSignUp").style.visibility = hidden;
    }
    if (value == "signUp"){
        document.getElementById("login").style.display = "none";
        document.getElementById("signUp").style.display = "block";
        document.getElementById("trainerSignUp").style.display = "none";
        // document.getElementById("login").style.visibility = hidden;
        // document.getElementById("signUp").style.visibility =visibility;
        // document.getElementById("trainerSignUp").style.visibility = hidden;
    }
    if (value == "trainerSignUp"){
        document.getElementById("login").style.display = none;
        document.getElementById("signUp").style.display = none;
        document.getElementById("trainerSignUp").style.display = block;
        // document.getElementById("login").style.visibility = hidden;
        // document.getElementById("signUp").style.visibility = hidden;
        // document.getElementById("trainerSignUp").style.visibility = visibility;
    }

}