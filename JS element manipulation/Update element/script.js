const square = document.getElementById("square");

document.getElementById("topleft").addEventListener("click", function(ev){
    if(square.style.borderTopLeftRadius === '30px') //HDH KAMPULH -> KANE ORTHI
        square.style.borderTopLeftRadius = '0px';
    else
        square.style.borderTopLeftRadius = '30px'; //HDI ORTHI -> KANE KAMPULH
});

document.getElementById("bottomleft").addEventListener("click", function(ev){
    if(square.style.borderBottomLeftRadius === '30px') //HDH KAMPULH -> KANE ORTHI
        square.style.borderBottomLeftRadius = '0px';
    else
        square.style.borderBottomLeftRadius = '30px'; //HDI ORTHI -> KANE KAMPULH
});

document.getElementById("topright").addEventListener("click", function(ev){
    if(square.style.borderTopRightRadius === '30px') //HDH KAMPULH -> KANE ORTHI
    square.style.borderTopRightRadius = '0px';
else
    square.style.borderTopRightRadius = '30px'; //HDI ORTHI -> KANE KAMPULH
});

document.getElementById("bottomright").addEventListener("click", function(ev){
    if(square.style.borderBottomRightRadius === '30px') //HDH KAMPULH -> KANE ORTHI
        square.style.borderBottomRightRadius = '0px';
    else
        square.style.borderBottomRightRadius = '30px'; //HDI ORTHI -> KANE KAMPULH
});

