const loginPopUp = () => {
    document.getElementById('login_box_container').style.display = "block";
}

const login_close = () => {
    document.getElementById('login_box_container').style.display = "none";
}

const login_close_out = () => {
    var login_box = document.getElementById('login_box_container');
    if (event.target == login_box) {
        login_box.style.display = "none";
    }
}

const menuPopUp = () => {
    var nav = document.getElementsByClassName('nav');
    if (!nav[0].style.display || nav[0].style.display == "none") {
        nav[0].style.display = "block";
        nav[1].style.display = "block";
        nav[2].style.display = "block";
    } else {
        nav[0].style.display = "none";
        nav[1].style.display = "none";
        nav[2].style.display = "none";
    }
}

const windowResizeHandler = () => {
    var width = window.innerWidth;
    var nav = document.getElementsByClassName('nav');
    if (width > 600) {
        nav[0].style.display = "inline";
        nav[1].style.display = "inline";
        nav[2].style.display = "inline";
    }
    if (width <= 600) {
        nav[0].style.display = "none";
        nav[1].style.display = "none";
        nav[2].style.display = "none";
    }
}