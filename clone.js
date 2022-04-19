// $(document.).scroll(function (event) {
//     var scroll = $(window).scrollTop();
//     // Do something
// });

window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("nav-bar").style.backgroundColor = "white";
        // var nav=document.querySelectorAll('.nav-text');
        var nav = document.getElementsByClassName('nav-text');
        for (let n = 0; n < nav.length; n++) {
            nav[n].style.color = "rgb(68,68,68)";

        }
        document.getElementById("nav-bar").classList.add('nav-color');
        document.getElementById("sidebutton1").style.color = "rgb(68,68,68)";
        document.getElementById("sidebutton1").style.border = " 1px solid rgb(68,68,68)";
        document.getElementById("language1").style.filter = 'invert(100%)';
        document.getElementById("lan").style.color = "rgb(68,68,68)";

    } else {
        document.getElementById("nav-bar").style.backgroundColor = "";
        // var nav=document.querySelectorAll('.nav-text');
        var nav = document.getElementsByClassName('nav-text');
        for (let n = 0; n < nav.length; n++) {
            nav[n].style.color = "";
        }
        document.getElementById("nav-bar").classList.remove('nav-color');
        document.getElementById("sidebutton1").style.color = "";
        document.getElementById("sidebutton1").style.border = "";
        document.getElementById("language1").style.filter = '';
        document.getElementById("lan").style.color = "";
        // document.getElementById("nav-text").style.color = "";
    }
}

function activefaqTab(id, tab_id) {
    console.log(tab_id);
    // document.getElementById('content1').style.display = "none";
    // document.getElementById('content2').style.display = "none";


    /*-------------tabb onlick bg color change----------*/
    var alltab = document.querySelectorAll('.faq-toggletag button');
    console.log(alltab);
    for (var i = 0; i < alltab.length; i++) {
        alltab[i].classList.remove('tabbutton-active')

    }
    /*------------tabb change and show content-------*/
    var faqtab = document.querySelectorAll('.simpletoggle-content>div');
    console.log(faqtab);
    for (var j = 0; j < faqtab.length; j++) {
        faqtab[j].style.display = "none";
    }
    document.getElementById(tab_id).style.display = "block";
    document.getElementById(id).classList.add('tabbutton-active');

}
/*------show answer when click on question------*/
function faqanswer(id) {

    if (document.getElementById(id).style.display == "block") {
        document.getElementById(id).style.display = "none";
        document.getElementById(id).parentNode.children[0].classList.remove('faqOpnned');
    } else {
        var showanswer = document.querySelectorAll('.faq .faq-text');
        for (var s = 0; s < showanswer.length; s++) {
            showanswer[s].style.display = "none";
        }
        /*---arrow up function---*/
        var arrow = document.querySelectorAll('.faq-heading');
        for (var c = 0; c < arrow.length; c++) {
            arrow[c].classList.remove('faqOpnned')
        }


        document.getElementById(id).style.display = "block";
        document.getElementById(id).parentNode.children[0].classList.add('faqOpnned');
    }

}
/*------------header slider-----------*/
function navslider(id) {
    if (document.getElementById(id).classList.contains('open') == true) {
        document.getElementById(id).classList.remove('open');
    } else {
        document.getElementById(id).classList.add('open');
    }

}

/*------------footer responsive--------------*/
var a = window.innerWidth;

function openfooternav(id) {
    if (a < 850) {
        if (document.getElementById(id).classList.contains('active') == true) {

            document.getElementById(id).classList.remove("active");
        } else {
            var footerclose = document.querySelectorAll('.items');
            for (var f = 0; f < footerclose.length; f++) {
                footerclose[f].classList.remove("active");
            }
            document.getElementById(id).classList.add("active");
        }
    }
}