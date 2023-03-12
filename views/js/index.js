function deslogar(){
    $.ajax({
        url: "./controllers/callAction.php",
        type: 'POST',
        data:{action: "Deslogou"},
        success: function(data){
            console.log(data);
            if (data == "Deslogado"){
                location.href = "./views/login.php"
            }
        },
        error: function(textStatus){
            console.log(textStatus);
        }
    })
}