
var lado1 = document.getElementById("lado1"),
    lado2 = document.getElementById("lado2"),
    lado3 = document.getElementById("lado3");


function activarLado(){
    sel = document.getElementById("select").value;
    if( sel == "cuadrado"){
        lado1.disabled = false;
        lado2.disabled = true;
        lado3.disabled = true;
    }else if(sel == "rectangulo"){
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = true;
    }else{
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = false;
    }
}
    