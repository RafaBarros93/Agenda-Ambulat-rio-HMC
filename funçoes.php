<?php 

function letras(){
	tecla = event.keyCode;
	if (tecla >= 33 && tecla <= 64 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){ 
	    return false;
	}else{
	   return true;
	}
}


 ?>