<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calasiao Census 2021</title>

    <link rel="shortcut icon" href="public/img/icon.ico" type="image/x-icon" >
    
    <link rel="stylesheet" href="public/bootstrap/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css" >

    <link rel="stylesheet" href="public/style/style.css" >

    <script src="public/jquery/dist/jquery.min.js"></script>

    <script src="public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    html , body{
        background: #ffffff;
    }

    img {
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
</style>
<body>

     <header>
        <div class="banners">
           
        </div>

      
    </header>
    



   <div class="container " style="margin-top:160px">
        <div class="col-10 m-auto">
            
            <div class="row">

        
                <div class="col-12 col-md-5  ">


                <div class="mt-4">
                        <p class="form-header"><b>Online Census Monitoring System </b></p>

                       <form action="login/s" method="POST">
                            <center id="errMsg" class="w-100 form-group mb-3 align-content-center" style="width:100%; "></center>
                           
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="form-group mb-3">
                                <label for="Password">Password</label>
                                <input type="Password" class="form-control" id="Password" name="password">
                            </div>
                            
                            <div class="justify-content-center d-block">
                                    <button type="submit" class="btn btn-success w-100">Log in</button> <a href="" class="d-block btn btn-link">Forgot Password</a>
                            </div>
                       </form>

                        
                </div>
                    

                
                </div>

                <div class="col-12 col-md-7 ">
                    <div class="mt-4 d-flex justify-content-end">
                        <img draggable="false" src="public/img/loginLogo.png" alt="" srcset="" height="300px">
                    </div>
                    
                </div>

            </div>
        </div>

   </div>

</body>
</html>
<script>
    

     $('form').on( 'submit', function(e){
        e.preventDefault();
        var url = $(this).attr('action')
        $data = $(this).serialize();
        JSON.stringify($data)
        $.post(url , $data , function(res){
            var r = JSON.parse(res)
            if(r.status){
                location.href = '<?php echo FOLDER_PATH; ?>'
            }else{
                $('#errMsg').html(' <span  style="width:100%; " class="alert alert-danger p-1 bg-danger text-light fw-bold ">'+r.message+'</span>')
            }
        })
    })
   

   
</script>