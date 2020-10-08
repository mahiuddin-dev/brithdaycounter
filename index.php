<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brith day  </title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col s12 m4 l3">
                <h3>Select Your Brth Year, Month and Date</h3>
                <form onsubmit="return false;" class="input-field" action="">
                    <input id="Uinput" type="text" class="datepicker">
                    <input type="submit" value="Submit" id="submitId">
                    <br>
                    <br>
                    <input type="reset" value="Reset" id="submitId">
                    <br>
                    <br>
                </form> 
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