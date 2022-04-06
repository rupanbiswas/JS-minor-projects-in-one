function myFunction() {
    var x = document.getElementById("myId");
    if (x.className === "mynav") {
      x.className += " responsive";
    } else {
      x.className = "mynav";
    }
  }