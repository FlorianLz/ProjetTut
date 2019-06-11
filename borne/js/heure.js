window.onload=function() {
  horloge('div_horloge');
  /*affichageheure();*/
  
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

/*function affichageheure(){
    function actualiserheure(){
        var madate=new Date();
        var monheure = madate.getHours();
        var mesminutes = madate.getMinutes();
        for(var i=0; i <=24;i++){
            if(i == monheure){
                document.getElementById("heure"+monheure).style.display = "none";
            } else{
            }
        }
    }
    actualiserheure();
    setInterval(actualiserheure,1000);
}*/