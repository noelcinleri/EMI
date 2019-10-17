function LoginCheck(){
    var email = document.getElementById("txtLoginEmail").value;
    var pwd = document.getElementById("txtLoginPwd").value;
    var forgetme = document.getElementById("c1").value;

    $.ajax({
        url: "",
        method: "GET",
        data: {email:email,password:pwd,IsForget:forgetme},
        dataType: "JSON",
        success: function(data){
            if(data.Status == true){
                window.location.reload();
            }
            else{

            }
        },
        error: function(a,b,g){

        }
    });
}

function registerCheck(){
    var category = $('li[class=current]').val();

    var email = document.getElementById("LoginEmail").value;
    var adsoyad = document.getElementById("LoginEmail").value;
    var ulke = document.getElementById("LoginEmail").value;
    var pwd = document.getElementById("pwdLogin").value;

    $.ajax({
        url: "",
        method: "GET",
        data: {email:email,AdSoyad:adsoyad,Ulke:ulke,Password:pwd,JobId:category},
        dataType: "JSON",
        success: function(data){
            if(data.Status == true){
                window.location.reload();
            }
            else{

            }
        },
        error: function(a,b,g){

        }
    });
}