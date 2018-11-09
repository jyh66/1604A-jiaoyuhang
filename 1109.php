<!doctype html>b
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>
            <p id="year">距离放假还有 <span id='d'> </span> 天 <span id='h'></span> 小时 <span id='m'> </span>分
             <span id='s'> </span>秒
                <span id='hs'></span>毫秒
            </p>
        </h1>
    </center>
</body>
</html>
<script>
    var stopTime = new Date(2018,12,10);
    fun();
    var id = setInterval("fun()",1);
    function fun(){
        var date = new Date();
        var day=Math.floor((stopTime-date)/1000/60/60/60/24);
        document.getElementById('d').innerHTML="<font color='red' size='10'>"+day+"</font>"
        var hour = Math.floor(((sotpTime-date)/1000/60/60)%24);
        document.getElementById('h').innerHTML="<font color='red' size='10'>"+hour+"</font>"
        var hour = Math.floor(((sotpTime-date)/1000/60)%60);
        document.getElementById('h').innerHTML="<font color='red' size='10'>"+m+"</font>"
        var hour = Math.floor(((sotpTime-date)/1000)%60);
        document.getElementById('h').innerHTML="<font color='red' size='10'>"+s+"</font>"
        var hour = Math.floor(((sotpTime-date))%1000);
        document.getElementById('h').innerHTML="<font color='red' size='10'>"+hs+"</font>"
        var hour = Math.floor(((sotpTime-date)<=0);
        if ((stopTime-date)<=0){
            clearInterval(id);
            document.getElementById("year").innerHTML="<font color='red' size='10'>放假了！</font>"
        }
    }
</script>