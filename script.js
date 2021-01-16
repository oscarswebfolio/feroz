let oscar = document.getElementById('oscar');


let num = 0;
let arr = [
    'oscar-heavy.jpg',
    'oscar-selfie.jpg'
]

timer = setInterval(function() {
    if (num < 1) {
        num++;
        oscar.src = arr[num];
        oscar.style.width = "300px";
    } else {
        num = -1;
      
    }
}, 3000)


let griffin = document.getElementById('griffin');
let numg = 0;
let arrg = [
    'griffin-oscar.gif',
    'card-boxing.PNG'
]

timerg = setInterval(function() {
    if (numg < 1) {
        numg++;
        griffin.src = arrg[numg];
        griffin.style.width = "300px";
    } else {
        numg = -1;
      
    }
}, 3000)
