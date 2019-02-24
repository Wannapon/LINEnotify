
<br> 
<?php
include "notify.php";
?>
<br>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LINE Notify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <!--LINE TOKEN = qLXmiQA4xDCFfw8pD2zH3fMv4leT5vCYfxY8fIcyP2m -->

    <h1 style="margin-top: 50px; text-align:center;"> แจ้งคอมพิวเตอร์เสีย </h1><br>

    <!-- <div class="container" style="margin-top: 50px;"> 
        <div class="row">
            <div class="col-md-3">
                <a href="?lab=1&pc=1" class="btn btn-danger send-notify">แจ้งเครื่องขัดข้อง Lab 1 เครื่องหมายเลข 1</a>
            </div> 
            <div class="col-md-3">
                <a href="?lab=1&pc=2" class="btn btn-danger send-notify">แจ้งเครื่องขัดข้อง Lab 1 เครื่องหมายเลข 2 </a>
            </div> 
            <div class="col-md-3">
                <a href="?lab=2&pc=1" class="btn btn-danger send-notify">แจ้งเครื่องขัดข้อง Lab 2 เครื่องหมายเลข 1 </a> 
            </div> 
            <div class="col-md-3">
                <a href="?lab=2&pc=2" class="btn btn-danger send-notify">แจ้งเครื่องขัดข้อง Lab 2 เครื่องหมายเลข 2 </a>
            </div> 
        </div>  
    </div> -->

    <form action="" style="text-align:center;">
        <select name="">
            <option value="">-- Choose --</option>
            <option value="?lab=1&pc=1" class="send-notify"><a>Test แจ้งเครื่องขัดข้อง</a></option>

            <option value="?lab=1" class="send-notify" >Lab 1</option>
        </select>
<!-- 
        <select name="choosepc">
            <option value="">-- Choose --</option>
            <option value="?pc=1" >PC Number 1</option>
        </select> -->
        <input type="submit" value="Submit" > 
        <br><br><hr><br>
    </form>

    <div style="text-align:center;">
    <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
        <input type="checkbox" class="send-url" value="Send URL">Send Link to LINE Notify <br>
        <input type="submit" value="Submit"> 

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="app.js"></script>

</body>
</html>

