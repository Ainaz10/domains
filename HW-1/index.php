<!DOCTYPE HTML>
<html>
    <body>

    <!--Подключение библиотеки jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <h1>
            Минимальное веб приложение ДЗ №1
        </h1>

        <form action="indexBack.php" method="post">
            Имя: <input type = "text" name="name"> <br>
            <br> E-mail: <input type = "text" name="email"> <br>
            <br> <input type = "submit" value="Зполнил? Нажимай!">
        </form>
        
    </body>
</html>

<!--задание №5-->
<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Начните вводить имя в поле ввода ниже:</b></p>
<form>
Имя: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Предлагаемые варианты: <span id="txtHint"></span></p>
</body>
</html>

<!--задание №6-->
<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // код для IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // код для IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Выберите человека:</option>
  <option value="1">Андрей Щипунов</option>
  <option value="2">Татьяна Щипунова</option>
  <option value="3">Кристина Щипунова</option>
  <option value="4">Леонид Щипунов</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Информация о человеке будет указана здесь...</b></div>

</body>
</html>