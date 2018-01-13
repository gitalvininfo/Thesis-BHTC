$(document).ready(function(){  
    $("#submit").click(function(){
        var name = $("#name").val();
        var description = $("#description").val();

        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name1='+ name + '&description1='+ description;
        if(name==''||description=='')
        {
            alert("Please Fill All Fields");
        }
        else
        {
            //AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "ajaxsubmit.php",
                data: dataString,
                cache: false,
                success: function(result){
                    alert(result);
                }
            });
        }
        return false;
    });
});