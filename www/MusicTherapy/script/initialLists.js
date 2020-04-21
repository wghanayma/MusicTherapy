// let cpl = document.querySelector(".cpl");

// let fcpl = function(event) {
//     event.preventDefault();
//     let pln = prompt("Creat New PlayList\n ", "PlayList Name");
//     alert("Done");
// };

// cpl.addEventListener("click", function(event) {
//     fcpl(event);
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
            document.querySelector(".ula").style.marginLeft = "225px";
            document.querySelector(".creat-button").style.marginLeft = "155px";
        } else {
            // document.querySelector(".ula").style.marginLeft = "180px";
            document.querySelector(".pl").style.marginLeft = "-75px";
        }
        document.querySelector("body").style.marginLeft = "170px";
        document.getElementById("sidebar").style.width = "170px";
    } else {
        sideWidth = width;
        document.querySelector(".ula").style.marginLeft = "80px ";
        document.querySelector(".creat-button").style.marginLeft = "32px";
        document.querySelector("body").style.marginLeft = "0px";
        document.getElementById("navbar").style.width = "0px";
    }
}