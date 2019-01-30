
<html>
<head>
    <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
    <script src="jquery-3.3.1.js"></script>
    <title>
            xml request
    </title>

</head>
<body>
<h1 id="con" align="center"> this is going to change</h1>
<button onclick="myfun()"></button>



<script>
    function myfun() {
        //make object
        var request1=new XMLHttpRequest();

        //method,page link,asy/true/false
        request1.open("GET","show.php",true);

        //request send

        request1.send();
        request1.onreadystatechange=function () {

            if(request1.readyState ==4 && request1.status==200) {
                document.getElementById("con").innerHTML = request1.responseText;
            }
        }

    }
</script>

</body>
</html>