"use strict";
document.addEventListener("DOMContentLoaded", function() {
    let toggle = document.getElementsByClassName("toggle")[0];
    let navigation = document.getElementsByClassName("navigation__mobile")[0];
    let lists = navigation.querySelectorAll(".menu ul li")
    let links = navigation.querySelectorAll(".menu ul li a")
    let hero = document.getElementsByClassName("hero")[0];
    let showing = false;
    let textimageHeadline = document.getElementsByClassName("textimage__headline")[0];
    let textimage__imageContainer = document.getElementsByClassName("textimage__imageContainer")[0];
    let textimage__textContainer = document.getElementsByClassName("textimage__textContainer")[0];
    toggle.addEventListener("click", function() {
        navigation.classList.toggle("d-flex");
        if(showing == false) {
            navigation.classList.remove("animate-out");
            navigation.classList.add("animate-in");
            showing = true;
        }
        else {
            navigation.classList.remove("animate-in");
            navigation.classList.add("animate-out");
            showing = false;
        }
    })
    window.addEventListener("scroll", function() {
        if(window.scrollY >= hero.offsetTop) {
            for(let link of links) {
                link.style.color = "white";
            }
            for(let list of lists) {
                list.style.backgroundColor = "lightgrey";
                list.style.opacity = "0.9";
            }
        }
        else {
            for(let link of links) {
                link.style.color = "black";
            }
            for(let list of lists) {
                list.style.backgroundColor = "transparent";
            }
        }

        if(window.scrollY >= textimageHeadline.offsetTop) {
            textimage__imageContainer.classList.add("left-animation");
            textimage__textContainer.classList.add("right-animation");
        }
    })
});
