let sideWidth;

var tags = {};
var jsmediatags = window.jsmediatags;

new jsmediatags.Reader(
    "http://localhost:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a"
  )
  .setTagsToRead(["title", "artist"])
  .read({
    onSuccess: function(tag) {
      console.log(tag);
    },
    onError: function(error) {
      console.log(":(", error.type, error.info);
    }
  });

function showArt() {
  ID3.loadTags(
    "http://192.168.1.100:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a",
    function() {
      var tags = ID3.getAllTags(
        "http://192.168.1.100:9000/Aitana%20-%20Spoiler/01%20Nada%20Sale%20Mal.m4a"
      );
      alert(tags.artist + " - " + tags.title + ", " + tags.album);
    }
  );
  let picture = tags.tags.picture;
  var base64String = "";
  for (var i = 0; i < picture.data.length; i++) {
    base64String += String.fromCharCode(picture.data[i]);
  }
  var imageUri =
    "data:" + picture.format + ";base64," + window.btoa(base64String);
  document.getElementById("Cover").setAttribute("src", imageUri);
}

function showOrHideSidebar() {
  let sidebar = document.getElementById("sidebar");
  let sidebarWidth = sidebar.offsetWidth;
  let width = window.screen.width;

  if (sidebarWidth == 0) {
    if (width < 768) {
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

$(window).resize(function() {
  //we have used the refactor tech
  resize();
});

$(document).ready(function() {
  //we have used the refactor tech
  resize();
});

function resize() {
  let width = window.screen.width;
  if (width >= 768) {
    document.querySelector("body").style.marginLeft = "170px";
    document.getElementById("sidebar").style.width = "170px";
  } else {
    sideWidth = width;
    document.querySelector("body").style.marginLeft = "0px";
    document.getElementById("navbar").style.width = "0px";
  }
}