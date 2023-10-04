"use strict";
var prevGSScrollpos = window.pageYOffset;
var headerGSsticky = document.querySelector(".gs-sticky-header");
var headerGSstickyUp = headerGSsticky.classList.contains("gs-sticky-header-up");
let headerGSparentblock = headerGSsticky.parentNode;
let headerGSalphaenabled = headerGSparentblock.classList.contains("gs-header-alpha");

window.addEventListener("scroll", function () {
    let direction = "down";
    if(headerGSstickyUp){
        let currentScrollPos = window.pageYOffset;
        if (prevGSScrollpos > currentScrollPos) {
            direction = "up";
        } else {
            direction = "down";
        }
        prevGSScrollpos = currentScrollPos;
    }
    if (headerGSsticky) {
        headerGSparentblock.classList.toggle("gs-sticky-enable", window.scrollY > 0 && ((headerGSstickyUp && direction == "up") || !headerGSstickyUp));
        if(headerGSalphaenabled){
            if(window.scrollY > headerGSparentblock.clientHeight){
                headerGSparentblock.classList.remove("gs-header-alpha");
            }else{
                headerGSparentblock.classList.add("gs-header-alpha");
            }
        }
        document.body.style = "--greenshift-sticky-height:" + headerGSparentblock.clientHeight + "px";
    }

});