function validateForm() {

    var fail = 0;
    
    var x = document.forms["emailForm"]["fname"].value;

    if (x == "") {
        document.getElementById("nameFix").innerHTML = "Please Enter Your Name";
        fail = 1;
    }else{
        document.getElementById("nameFix").innerHTML = "";
    }

    var y,text;

    y = document.forms["emailForm"]["phone"].value;
    if (isNaN(y) || y<1000000000 || y>19999999999){
    	text = "Phone Is Not Valid";
    	document.getElementById("demo").innerHTML = text;
    	fail = 1;
    }else{
    	text = "";
		document.getElementById("demo").innerHTML = text;
    }

    y = document.forms["emailForm"]["email"].value;

    if (y == "") {
        document.getElementById("emailFix").innerHTML = "Please Enter A Valid E-mail";
        fail = 1;
    }else{
        document.getElementById("emailFix").innerHTML = "";
    }

    if (fail){
        return false;
    }
}

function emailValidation(){

    var y = document.forms["emailForm"]["email"].value;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (y != '' && !y.match(re)) {
        document.getElementById("emailFix").innerHTML = "Please Enter A Valid E-mail";
    }else{
        document.getElementById("emailFix").innerHTML = "";
    }

}

function serviceRequest() {
    var hair, color, lights, correct, style, final;

    var coma = ", ";
    var period = ". ";
    var bool = 0;
    final = "Services: ";

    hair = document.forms["emailForm"]["optionsRadiosInline"].value;
    color = document.forms["emailForm"]["RadiosInline"].value;
    lights = document.forms["emailForm"]["Radiosline"].value;
    correct = document.forms["emailForm"]["correct"].checked;
    style = document.forms["emailForm"]["Radios"].value;
    
    switch(hair){
        case "1":
            final = final.concat("Haircut - W");
            bool = 1;
            break;
        case "2":
            final = final.concat("Haircut - M");
            bool = 1;
            break;
        case "3":
            break;
    }
    switch(color){
        case "1":
            if (bool == 1){
                final = final.concat(coma, "Color - All");
            }else{
                final = final.concat("Color - All");
                bool = 1;
            }
            break;
        case "2":
            if (bool == 1){
                final = final.concat(coma, "Color - Roots");
            }else{
                final = final.concat("Color - Roots");
                bool = 1;
            }
            break;
        case "3":
            break;
    }
    switch(lights){
        case "1":
            if (bool == 1){
                final = final.concat(coma, "Highlights - Dimensional");
            }else{
                final = final.concat("Highlights - Dimensional");
                bool = 1;
            }
            break;
        case "2":
            if (bool == 1){
                final = final.concat(coma, "Highlights - Full");
            }else{
                final = final.concat("Highlights - Full");
                bool = 1;
            }
            break;
        case "3":
            if (bool == 1){
                final = final.concat(coma, "Highlights - Partial");
            }else{
                final = final.concat("Highlights - Partial");
                bool = 1;
            }
            break;
        case "4":
            break;
    }
    switch(correct){
        case true:
            if (bool == 1){
                final = final.concat(coma, "Color Correction");
            }else{
                final = final.concat("Color Correction");
                bool = 1;
            }
            break;
        default:
            break;
    }
    switch(style){
        case "1":
            if (bool == 1){
                final = final.concat(coma, "Style - Blow");
            }else{
                final = final.concat("Style - Blow");
                bool = 1;
            }
            break;
        case "2":
            if (bool == 1){
                final = final.concat(coma, "Style - Iron");
            }else{
                final = final.concat("Style - Iron");
                bool = 1;
            }
            break;
        case "3":
            break;
    }
    if (bool == 0){
        final = "";
    }else{
        final = final.concat(period);
    }
    document.getElementById("serving").innerHTML = final;
}