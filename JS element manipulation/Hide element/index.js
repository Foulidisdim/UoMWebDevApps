btn1 = document.getElementById('btn1');
btn2 = document.getElementById('btn2');

square = document.getElementById('rectangle');

btn1.addEventListener('click', function (e) {
	if (square.style.borderTop == 'none') {
		square.style.borderTop = '5px solid black';
		square.style.borderBottom = '5px solid black';
	} else {
		square.style.borderTop = 'none';
		square.style.borderBottom = 'none';
	}
});

btn2.addEventListener('click', function (e) {
	if (square.style.borderLeft == 'none') {
		square.style.borderLeft = '5px solid black';
		square.style.borderRight = '5px solid black';
	} else {
		square.style.borderLeft = 'none';
		square.style.borderRight = 'none';
	}
});
