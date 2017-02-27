<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Can Validate Input</h1>

<p>Phone: 1+ (<input id="area">)-<input id="snd">-<input id="last"></p>

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x, y, z, text;

    // Get the value of the input field with id="are"
    x = document.getElementById("area").value;
    y = document.getElementById("snd").value;
    z = document.getElementById("last").value;

    // If x is a valid area code
    if (isNaN(x) || x < 100 || x > 999) {
        text = "Not a valid area code";
    }else
    if (isNaN(y) || y < 100 || y > 999) {
        text = "Not a valid phone";
    }else
    if (isNaN(z) || z < 1000 || z > 9999) {
        text = "Not a valid phone";
    }else{
    	text = "Input okay";
    }


    document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 
