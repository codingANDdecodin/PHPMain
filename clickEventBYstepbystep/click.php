<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function test(){
            $.ajax({url:'echoHandle.php',success:function(result){
                 $("div").text(result);
            }})
            // alert('test')
        }
    </script>
</head>
<body>
    <button onclick="test()">click</button>
    <div></div>
</body>
</html>