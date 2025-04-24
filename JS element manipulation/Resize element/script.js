"use strict";
const par = document.querySelector("#par");
const buttonPlus10 = document.getElementById("+10");
const buttonMinus10 = document.getElementById("-10");


buttonPlus10.addEventListener("click", function(){
    let parSize = getComputedStyle(par).height;
    let parActualSize = parseInt(parSize); // H TO Number(parSize.replace("px", ""));
    
    if( parActualSize <  200 ) {
        parActualSize +=10 ;
        par.style.height = parActualSize + "px"; //aparaithth h prosthiki tou "px" sto telos.
        par.style.width = parActualSize + "px";
        par.innerHTML = parActualSize + "px"; /*Me to .innerHTML exo prosbasi sto periexomeno tou koutiou 
        dld to text pou leei poso megalo einai sth sugkekrimenh periptosh*/
       
        
        /* LATHOS ALLA TO AFHNO:
        AN XREIASTEI TO par.style.paddingTop = parActualSize/2-20+"px"; 
        
        To top padding einai 30px sthn arxh otan leei 100 mesa sto kouti. theloume oso megalonei 
        to kouti na eksakolouthei to padding na einai consistent. GIA NA BGALO SOSTA TA NOUMERA POU PREPEI NA BALO STH PRAKSI,
        ESTO OTI TO SIZE EINAI 100. YPOLOGIZO DLD TA NOUMERA ME TO ORIGINAL SIZE POU FAINETAI OTAN ANOIGO TH SELIDA.
        einai 100/2 = 50 ara - 20 = 30!!!!! (kai bazo kai th malakia to px giati etsi anagnorizetai to megethos sth css).
        
        */
    } 
});

buttonMinus10.addEventListener("click", function(){
    let parSize = getComputedStyle(par).height;
    let parActualSize = parseInt(parSize); // H TO Number(parSize.replace("px", ""));
    
    if( parActualSize >  100 ) {
        parActualSize -=10 ;
        par.style.height = parActualSize + "px"; //aparaithth h prosthiki tou "px" sto telos.
        par.style.width = parActualSize + "px";
        par.innerHTML = parActualSize+ "px";
    } 
});