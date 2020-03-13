$(document).ready(function () {
    let lightcomponents = document.getElementsByClassName("light");
    let darkcomponents = document.getElementsByClassName("dark");

    let cookies = getCookie("accessibility");
    console.log(cookies);

    $("#toggle").on("click", function () {
        if(lightcomponents.length > 0){
            switchbg("dark");
            $("#toggle").load("cookies.php", {status: "update", preference: "dark"});

            console.log("toggled dark");
        } else if(darkcomponents.length > 0){
            switchbg("light");
            $("#toggle").load("cookies.php", {status: "update", preference: "light"});

            console.log("toggled light");
        }
    });

    function switchbg(state){
        if(state == "dark"){
            $(".light").addClass("dark");
            $(".light").removeClass("light");
        } else if(state == "light"){
            $(".dark").addClass("light");
            $(".dark").removeClass("dark");
        }
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
    }
});