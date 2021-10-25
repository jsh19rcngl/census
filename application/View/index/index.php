<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Calasiao Census 2021</title>

   <link rel="shortcut icon" href="<?php echo base_url('public/img/icon.ico'); ?>" type="image/x-icon" >
    
    <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/dist/css/bootstrap.min.css'); ?>" >

    <link rel="stylesheet" href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('public/bootstrap-icons/font/bootstrap-icons.css'); ?>" >

    <link rel="stylesheet" href="<?php echo base_url('public/style/style.css'); ?>" >

    <script src="<?php echo base_url('public/jquery/dist/jquery.min.js'); ?>"></script>

    <script src="<?php echo base_url('public/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <style>
       
        @media print{
            .banner , .page-info , .--print-hide{
                display:none;
            }

            
        }
    </style>
</head>

<body>
    

    <header>
        <div class="banner">
           <div class="navs">
               <ul >
                   <li>
                       <a href="<?php echo base_url(""); ?>">
                           <i class="icon fa fa-home"></i>
                           Home</a>
                   </li>
                   <li>
                       <a href=""> <i class="icon fa fa-book"></i>About</a>
                   </li>
                   <li><a href="<?php echo base_url("Logout/"); ?>"> <i class="icon fa fa-sign-out"></i>Log out</a></li>
               </ul>
           </div>
        </div>

        <div class="page-info">
            <p>
               <span class="date" id="date"> </span>
               <span class="time" id="time"> </span>
            </p>
        </div>
    </header>


   <div class=" container-fluid">
          
        <?php
            (isset($content)) ? require  $_SERVER['DOCUMENT_ROOT']. VIEW_PATH . ucfirst($content) : "";
        ?>
   </div>

</body>
</html>
<script>
    


    function pageInfoGetDate(){
        var arrayDay = ['Sunday' , 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' ];
        var arrayMonth = ['january' , 'Febrary' , 'March' , 'April' , 'May' , 'June' , 'July' , 'August' , 'September' , 'October' , 'November' , 'December' ];
        var date = new Date();
        var day = date.getDay();
        var month = date.getMonth();
        var dayDate = date.getDate();
        var yr = date.getFullYear();

        var DateTimeStr = arrayDay[day] + ', ';

        DateTimeStr += arrayMonth[month] +' '+  dayDate  +', ' + yr;

        document.getElementById("date").innerHTML = DateTimeStr;

        //return DateTimeStr
    }

    function pageInfoGetTime() {
        var time = new Date ();

        var mins = (time.getMinutes() < 10 ? '0' : '') + time.getMinutes();

        var hrs = time.getHours();
        
        var amp = "pm"; 
        if (hrs >= 0 & hrs < 12) {
            amp = "am"
        }

        var timeStr = (hrs !== 0) ? hrs : '12';
        timeStr += ":" + mins + " "+ amp;

        document.getElementById("time").innerHTML = timeStr;

        //return timeStr;
    }

    function setPageInfoDateTime() {
        pageInfoGetDate()
        pageInfoGetTime()
    }

    setPageInfoDateTime()
    setInterval(setPageInfoDateTime , 800)
</script>