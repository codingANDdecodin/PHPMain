<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <button id='load-button'> load data</button>
    <div id=''>
    <table border="1" width="100%" cellspacing="0" cellpadding="10px" id='table-data'>
   
     </table>
</div>
<script>

    $(document).ready(function(){
        $('#load-button').on('click',function(e){
            $.ajax({
                url:'ajax-load.php',
                type:'POST',
                success:function(data){
                    $('#table-data').html(data);
                }
            })
        })
    })
</script>
</body>
</html>