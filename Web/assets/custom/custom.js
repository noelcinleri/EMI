var models = document.getElementsByClassName("myBox");
var toplamTutar;
for(var i=0;i < models.length;i++){
    $(models[i]).click(function() {

        console.log(this.style.borderColor.toString());
        if(this.style.borderColor == "rgb(228, 77, 58)")
        {
            this.style.borderColor = "#e5e5e5";
            if(i == 1){
                toplamTutar =toplamTutar - parseInt(document.getElementById("paketFiyat1").value);
            }
            else if(i == 2)
            {
                toplamTutar =toplamTutar - parseInt(document.getElementById("paketFiyat2").value);
            }   
            else if(i == 3){
                toplamTutar =toplamTutar - parseInt(document.getElementById("paketFiyat3").value);
            }
        }
        else
        {
            this.style.borderColor = "rgb(228, 77, 58)";
            if(i == 1)
            {
                toplamTutar =toplamTutar + parseInt(document.getElementById("paketFiyat1").value);
            }
            else if(i == 2){
                toplamTutar =toplamTutar + parseInt(document.getElementById("paketFiyat2").value);
            }   
            else if(i == 3){
                toplamTutar =toplamTutar + parseInt(document.getElementById("paketFiyat3").value);
            }
        }
        console.log(toplamTutar);
        document.getElementById("paketTutarToplam").innerHTML = toplamTutar.toString();
    });
}