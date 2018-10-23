$(document).ready(function(){
    $("#saved_email").submit(function(event){

        var email = $('#newsletter_email').val();
        console.log(email);
        $.ajax({
            url : "http://lauching/",
            data : {'email' : email},
            method : "post",
            success : function(response){
                console.log("plop");
                $("#exampleModal").modal("hide");
                $("#newsletter_email").val("");
            },
            error: function(erreur){
                console.log("error");
            }
        })

        event.preventDefault();
    })
});
