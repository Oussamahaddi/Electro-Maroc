



// slider 

// get all bullet in slider
let sliderBullet = document.querySelectorAll("#slider_bullet span");

// get image that i want to slide them
let sliderImg = document.getElementById('slider_img');

let arrOfImg = ["/img/product/pc/p1.png", "/img/product/pc/p2.png", "/img/product/pc/p3.png"] 

// loop in the bullet and add event on each one click on him
sliderBullet.forEach(el => {
    // add event click on element
    el.addEventListener('click', _ => {
        // remove the backgorund from all element
        sliderBullet.forEach(element => {
            element.classList.remove('bg-white')
        });
        // add background to element that click in
        el.classList.add('bg-white');
        // get data index of the element
        let dataIndex = parseInt(el.getAttribute('data-index'));
        // set the image 
        sliderImg.setAttribute('src', "http://localhost/electromaroc" + arrOfImg[dataIndex - 1]);
    })
})




