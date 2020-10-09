<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brith day  </title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- <script src="https://kit.fontawesome.com/410f912a03.js" crossorigin="anonymous"></script> -->   

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style type="text/css">
       #spinner{
           display: none;
       }
     </style>
</head>
<body>
    
<header> 
    <nav class="nav-wrapper indigo fixed"> 
       <div class="container"> 
           <a href="index.php" class="brand-logo">Mahiuddin</a>
           <a href="#" data-target="mobileMenu" class="sidenav-trigger">
             <i class="material-icons">menu</i>
           </a>
           <ul class="right hide-on-med-and-down"> 
              <li><a target="_" href="https://github.com/codermahiuddin/brithdaycounter/">Github Links</a></li>
              <li><a target="_" href="https://www.facebook.com/codermahiuddin">Facebook</a></li>
              <li><a target="_" href="https://www.linkedin.com/in/mdmahiuddin/">Linkdin</a></li>
              <li><a target="_" href="https://twitter.com/codermahiuddin">Twitter</a></li>
            
              
           </ul>
       </div>
    </nav>
</header>
<!-- mobile menu -->
    <ul class="sidenav" id="mobileMenu">
      <li><a target="_" href="https://github.com/codermahiuddin/brithdaycounter/">Github Links</a></li>
      <li><a target="_" href="https://www.facebook.com/codermahiuddin">Facebook</a></li>
      <li><a target="_" href="https://www.linkedin.com/in/mdmahiuddin/">Linkdin</a></li>
      <li><a target="_" href="https://twitter.com/codermahiuddin">Twitter</a></li>
    </ul>




    <div class="container">
        <div class="row">
            <div class="col6 s12 m4 l3">
                <h3>Select Your Brth Year, Month and Date</h3>
                <form onsubmit="return false;" class="input-field" action="">
                    <input id="Uinput" type="text" class="datepicker">

                    <button id="submitId" class="btn waves-effect waves-light" type="submit" name="action">Submit </button>      

                    <button style="margin-left: 5px" class="btn waves-effect waves-light" type="reset">Reset </button>

                    <br>
                    <br>
                </form> 
                <!-- spinner start -->
                <div id="spinner">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                        <div class="circle"></div>
                        </div><div class="gap-patch">
                        <div class="circle"></div>
                        </div><div class="circle-clipper right">
                        <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                        <div class="circle"></div>
                        </div><div class="gap-patch">
                        <div class="circle"></div>
                        </div><div class="circle-clipper right">
                        <div class="circle"></div>
                        </div>
                    </div>

                  </div>              
                </div>
                <!-- spinner end -->
                <div id="feadback"> <h3></h3> </div>
            </div>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        var currYear  = (new Date()).getFullYear();
        var currMonth = (new Date()).getMonth();
        var currDay   = (new Date()).getDate();

        $(document).ready(function() {
            $(".sidenav").sidenav();
            $(".datepicker").datepicker({
                defaultDate: new Date(currYear-18,9,27),
                setDefaultDate: new Date(2000,01,31),
                maxDate: new Date(currYear,currMonth,currDay-1),
                yearRange: [1900, currYear],
                format : "dd-mm-yyyy"  
            });

        });

    </script>
    <script type="text/javascript" src="ajax.js"></script>


</body>
</html>