function check_user(str) {
        if (str.length == 0) { 
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById("check_user").innerHTML = this.responseText;
                    if((this.responseText == 1) || (str == "")) {
                        document.getElementById("check_user").innerHTML = "";
                    } else if((this.responseText == 0) && (str != "")) {
                        document.getElementById("check_user").innerHTML = "&#10004";
                    } else {
                        document.getElementById("check_email").innerHTML = "ERROR";
                    }//*/
                }
            };
            xmlhttp.open("GET", "check_user.php?q=" + str, true);
            xmlhttp.send();
        }
    }

function check_email(str) {
    if (str.length == 0) { 
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("check_email").innerHTML = this.responseText;
                if((this.responseText == 1) || (str == "")) {
                    document.getElementById("check_email").innerHTML = "";
                } else if((this.responseText == 0)  && (str != "")) {
                    document.getElementById("check_email").innerHTML = "&#10004";
                } else {
                    document.getElementById("check_email").innerHTML = "ERROR";
                }//*/
            }
        };
        xmlhttp.open("GET", "check_email.php?q=" + str, true);
        xmlhttp.send();
    }
}