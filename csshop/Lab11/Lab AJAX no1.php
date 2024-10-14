<html><head><meta charset="utf-8">
<script>
        var httpRequest;
        function send() {
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = showResult;
            var a = document.getElementById("a").value || 0;
            var b = document.getElementById("b").value || 0;
            var c = document.getElementById("c").value || 0;
            var url = "addno1.php?a=" + a + "&b=" + b + "&c=" + c;
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
<h2> บันทึกการขาย </h2>
มะม่วงกก.ละ 30 บาท ขายได้  <input type="number" id="a" onkeyup="send()"> กก.<br>
ส้มกก.ละ 70 บาท ขายได้ <input type="number" id="b" onkeyup="send()" > กก. <br>
กล้วยหวีละ 30 บาท ขายได้ <input type="number" id="c" onkeyup="send()"> หวี <br>
<span id="result"></span>
</body></html>