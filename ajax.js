$(document).ready(function(){
    $("#submitId").click(function(){
        var usrInput = $("input#Uinput").val();
        $("#spinner").css("display", "block")
        
        var result = $("#feadback  h3").text();
        if(result != ""){
            $("#feadback  h3").text("");          
        }
        setTimeout(function(){  
            if(usrInput == ""){
                $("#feadback  h3").text("Please input Your Brith Year, Month and day");
            }else{
            $.post("brithdayCount.php", {userinput:usrInput}, function(mydata){
                    $("#feadback h3").text(mydata); 
                } )
            }
            $("#spinner").css("display", "none")
        }, 2000);
            
    })
})