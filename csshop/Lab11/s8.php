<html><head><meta charset="utf-8">
<script>
var httpRequest;
function send() {
httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = showResult;
var a = document.getElementById("a").value;
var b = document.getElementById("b").value;
var url= "add.php?a=" + a + "&b=" + b;
httpRequest.open("GET", url);
httpRequest.send();
}
function showResult() {
if (httpRequest.readyState == 4 && httpRequest.status == 200) {
document.getElementById("result").innerHTML = httpRequest.responseText;
}
}
</script></head>
<body>
a = <input type="text" id="a"><br>
b = <input type="text" id="b" onkeyup="send()"><br>
<span id="result"></span>
</body></html>