window.onload=function() {
  horloge('div_horloge');
  /*affichageheure();*/
  triauto();
  
};

function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}

function triauto(){
    function actualisation(){
        var madate=new Date();
        var heures=madate.getHours();
        var minutes=madate.getMinutes();
        
        for (i=9;i<heures;i++){
            if (minutes<15){
                for(k=9;k<heures;k++){
                    var x = document.getElementsByClassName("card h"+k+"m15");
                    x.style.display="none";
                }
            }
            /*if (minutes<30){
                for(k=9;k<heures;k++){
                    if(document.getElementsByClassName("card h"+k+"m30")){
                        alert("card h"+k+"m30");
                        var x = document.getElementsByClassName("card h"+k+"m30");
                        x.style.display="none";
                    }
                }
            }*/
            
            if (minutes>15 && heures>=i){
                var x = document.getElementsByClassName("card h"+(i+1)+"m15");
                for (j = 0; j < x.length; j++) {
                    x[j].style.display = "none";
               }
            }
            if (minutes>30 && heures>=i){
                var x = document.getElementsByClassName("card h"+(i+1)+"m30");
                for (j = 0; j < x.length; j++) {
                    x[j].style.display = "none";
               }
            }
            
            var x = document.getElementsByClassName("card h"+(i+1));
                for (j = 0; j < x.length; j++) {
                    x[j].style.display = "none";
               }
        }
    }
    actualisation();
    setInterval(actualisation,1000);
}