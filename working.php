<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="load">Click here to see the code </button>
</div>
<p id="demo">bb</p>
<script>

var obj, dbParam, xmlhttp, myObj, x, txt = "";
obj = { "table":"customers", "limit":20 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        txt += "<table border='1'>"
        for (x in myObj) {
            txt += "<tr><td>" + myObj[x].name + "</td></tr>";
        }
        txt += "</table>"
        document.getElementById("demo").innerHTML = txt;
    }
};
xmlhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);

/*
FIRST TRIAL FAILED
*/

</script>
</body>
</html>
