let items = document.querySelectorAll('.product .item');
let active = 3;

function loadShow() {
    if (active < 0) {
        active = items.length - 1;
    } else if (active >= items.length) {
        active = 0;
    }

    items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;

    let stt = 0;
    for (var i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${150 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-0.3deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.opacity = stt > 2 ? 0 : 1;
    }

    stt = 0;
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-150 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(0.3deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.opacity = stt > 2 ? 0 : 1;
    }

    // Convert content_text to uppercase
    const content_text = document.querySelectorAll(".content_text");
    content_text.forEach((el) => el.innerHTML = el.innerHTML.toUpperCase());
}

loadShow();

let next = document.getElementById('next');
let prev = document.getElementById('prev');

next.onclick = function () {
    active++;
    loadShow();
};
prev.onclick = function () {
    active--;
    loadShow();
};

const interval = 3000;
setInterval(function () {
    active++;
    loadShow();
}, interval);

const textList = document.querySelectorAll(".container_content_product_itemTextnName");

textList.forEach((el) => {
  el.innerHTML = el.innerHTML.toUpperCase();
});

const numbers = document.querySelectorAll(".container_bottom_itemList--number");
let index = 1;

numbers.forEach((el) => {
    el.innerHTML = index;
    index++;
});

numbers.forEach((el, index) => {
    if (index + 1 === 1) {
        el.style.color = "red";
    }
    else if (index + 1 === 2) {
        el.style.color = "orange";
    }
    else if (index + 1 === 3) {
        el.style.color = "green";
    }
});
