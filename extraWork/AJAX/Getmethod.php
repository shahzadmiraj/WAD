<html>
<head>
    <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
    <script src="jquery-3.3.1.js"></script>
    <title>
        xml request by GET method
    </title>
    <script>
        $(document).ready(function () { //when page is loaded
            //class.even.fucn
                        $('.btnclick').click(function () {



                            //url,func(data,status)
                            $.get('show.php',function (data,status) {
                                $("#con").html(data);
                            });




                        });
        });
    </script>

</head>
<body>
<h1 id="con" align="center"> this is going to change</h1>
<button class="btnclick" >on click </button>




</body>
</html>