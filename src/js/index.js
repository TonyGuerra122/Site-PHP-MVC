function deslogar(){
    $.ajax({
        url: "/Site-PHP-MVC/controllers/callAction.php",
        type: 'POST',
        data:{action: "Deslogou"},
        success: function(data){
            console.log(data);
            if (data == "Deslogado"){
                location.reload();
            }
        },
        error: function(textStatus){
            console.log(textStatus);
        }
    })
}