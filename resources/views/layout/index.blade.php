<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
        /* body {
            background: url(../image/shiba2.jpg) ;
            background: url(images/bg.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        } */
        /* img {
            max-width: 100%;
            max-height: 100%;
        } */
        .img-container {
            text-align: center;
        }
        footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
        }
        audio {
            display: none
        }
        @media only screen and (max-width: 1024px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
        }
    </style>

    <script type="text/javascript">
        $( document ).ready(function() {
            var file = $("source").attr("src");
            console.log(file);
            var audio = new Audio(file);
            audio.play();
            console.log(audio);
        });
    </script>
</head>
<body>
    <header></header>
    <main>
        <audio controls >
            <source src="{{asset('audio/hpbd.mp3')}}" type="audio/mpeg"> 
        </audio>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 d-flex justify-content-center">
                <img src="{{ asset('image/bd-cake1.gif')}}" alt="">
            </div>
            <div class="col-lg-2">
                
            </div>
        </div>
        <div class="row">

        </div>
        
    </main>
    
    <footer>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('image/dog-run.gif')}}" alt="">
            <img src="{{ asset('image/dog-run.gif')}}" alt="">
            <img src="{{ asset('image/dog-run.gif')}}" alt="">
        </div>
    </footer>
    
</body>
</html>