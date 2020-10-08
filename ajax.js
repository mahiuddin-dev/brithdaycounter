$(document).ready(function(){
    $("#submitId").click(function(){
        var usrInput = $("input#Uinput").val();
        if(usrInput == ""){
            $("#feadback h3").text("Please input Your Brith Year, Month and day");
        }else{
        $.post("brithdayCount.php", {userinput:usrInput}, function(mydata){
                $("#feadback h3").text(mydata); 
            } )
        }    
    })
})