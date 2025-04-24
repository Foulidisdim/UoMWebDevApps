const numbers = document.getElementsByTagName("input"); //TA 2 NOUMERA POU THA BALO

const operator = document.querySelector("select"); //TA + - * / EINAI

const result = document.querySelector("span");

/* PROSOXH!
1.getelementsbytagname - GIA POLLA ANONYMA
2.queryselector - GIA ENA MONO ANONUMO (TO PROTO POU EMFANIZETAI) 
3.Genika kalo einai na bazo id's kai xrhsh tou getelementbyid
*/

document.getElementById("calcButton").addEventListener("click", function(func){

    /*PROSOXH!!!! const SHMAINEI CONSTANT!!! AN THELO NA EKXORISO TIMH, H METABLHTH DE PREPEI NA EINAI STATHERA! G AUTO
    GINETAI GIA TO MESSAGE POU THA TOU BALO KATI KAI THA TO EMFANISO H XRHSH TOU LET!!! */

    let message = "Invalid numbers..." //GIA NA TO EPISTREPSEI AN DEN EINAI ARITHMOI

    const num0 = Number(numbers[0].value); /*SHMANTIKO NA TO BALO MESA STO Number!!!! GIA NA KSEREI OTI TO 
    //DEDOMENO AUTOU TOU PINAKA EINAI ARITHMOS. */
    const num1 = Number(numbers[1].value);

    /*
    SOSARAAAAAA!!! .value gia get/set timhs SE PRAGMATA FORMAS. PX <input> <select>.
    .innerHTML gia get/set timhs SE CONTAINER ELEMENTS PX <p> h <div>.
    */

    switch(operator.value){ //prosexe suntaksi to switch.
        case '+':
            message = num0 + num1;
            break;
        case '-':
            message = num0 - num1; 
            break;
        case '*':
            message = num0 * num1;
            break;
        case '/':
            message = num0 / num1;
            break;
    }

    result.innerHTML = message; //Xrhsh innerHTML gia na balo sto span to apotelesma ths prakshs.

}); /*PROSOXI! EINAI SAN TO EVENT LISTNER STH JAVA. H MEGALH SUNARTHSH KLEINEI META TO SCRIPT POU TREXEI O EVENT
 LISTENER. ARA ) META TO }. */