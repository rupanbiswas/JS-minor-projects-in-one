// responsive nav
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnavigation") {
      x.className += " respo";
    } else {
      x.className = "topnavigation";
    }
  }