let a = document.querySelector(".a");
let b = document.querySelector(".b");
let au = document.querySelector(".player");
// let cpl = document.querySelector(".cpl");
let sna = document.querySelector(".sna");
let sn = document.querySelectorAll("img");
let ar;
let ar2;
let arf = [];
let inte;
for (let i = 0; i < sn.length; i++) {
    if (sn[i].getAttribute("name")) {
        ar = sn[i].getAttribute("src").split("/");
        ar2 = ar[ar.length - 1].split(".");

        arf.push(ar2[ar2.length - 2]);
    }
}

// cpl.addEventListener("click", function(event) {
//     event.preventDefault();
//     let pln = prompt("Creat New PlayList\n ", "PlayList Name");
//     alert("Done");
// });

let fu = function(t) {
    if (t == 0) {
        localStorage.setItem("time0", au.currentTime);
    } else localStorage.setItem("time1", au.currentTime);
};

a.addEventListener("click", function(event) {
    clearInterval(inte);

    event.preventDefault();

    au.setAttribute("src", "../music/quran");
    au.currentTime = localStorage.getItem("time0");

    sna.innerHTML = arf[0];
    inte = setInterval("fu(0)", 1);
});

b.addEventListener("click", function(event) {
    clearInterval(inte);

    event.preventDefault();

    au.setAttribute("src", "../music/quran2");
    au.currentTime = localStorage.getItem("time1");
    sna.innerHTML = arf[1];
    inte = setInterval("fu(1)", 1);
});

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
            document.querySelector(".yourlist").style.marginLeft = "160px";
        } else {
            document.querySelector(".music").style.marginLeft = "140px";
            document.querySelector(".ula").style.marginLeft = "182px";
            document.querySelector(".yourlist").style.marginLeft = "120px";
        }
        document.querySelector("body").style.marginLeft = "170px";
        document.getElementById("sidebar").style.width = "170px";
    } else {
        sideWidth = width;
        document.querySelector(".music").style.marginLeft = "34px";
        document.querySelector("body").style.marginLeft = "0px";
        document.getElementById("navbar").style.width = "0px";
    }
}