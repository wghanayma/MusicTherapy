// let cpl = document.querySelector(".cpl");
// cpl.addEventListener("click", function(event) {
//     event.preventDefault();
//     let pln = prompt("Creat New PlayList\n ", "PlayList Name");
//     alert("Done");
// });

let sideWidth;

function showOrHideSidebar() {
    let sidebar = document.getElementById("sidebar");
    let sidebarWidth = sidebar.offsetWidth;
    let width = window.screen.width;

    if (sidebarWidth == 0) {
        if (width < 767) {
            sidebar.style.cssText = "width: " + sideWidth + "px;";
        } else {
            document.querySelector("body").style.marginLeft = "170px";
            sidebar.style.cssText = "width: 170px";
        }
    } else {
        document.querySelector("body").style.marginLeft = "0px";
        sidebar.style.cssText = "width: 0px;";
    }
}

// $(window).resize(function() {
//     //we have used the refactor tech
//     resize();
// });

$(document).ready(function() {
    //we have used the refactor tech
    resize();
});

function resize() {
    let width = window.screen.width;
    if (width >= 768) {
        if (width == 768) {
            document.querySelector(".music").style.marginLeft = "115px";
            document.querySelector(".ula").style.marginLeft = "200px";
            document.querySelector(".yourlist").style.marginLeft = "20px";
        } else {
            document.querySelector(".music").style.marginLeft = "140px";
            document.querySelector(".ula").style.marginLeft = "180px";
            document.querySelector(".yourlist").style.marginLeft = "200px";
        }
        document.querySelector("body").style.marginLeft = "170px";
        document.getElementById("sidebar").style.width = "170px";
    } else {
        document.querySelector(".yourlist").style.marginLeft = "15px";
        sideWidth = width;
        document.querySelector(".music").style.marginLeft = "34px";
        document.querySelector("body").style.marginLeft = "0px";
        document.getElementById("navbar").style.width = "0px";
    }
}