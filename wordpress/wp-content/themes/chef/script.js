    function myFunction() {
        var x = document.getElementById("nav_right");
        if (x.className === "nav_right") {
            x.className += " responsive";
        } else {
            x.className = "nav_right";
        }
    }
