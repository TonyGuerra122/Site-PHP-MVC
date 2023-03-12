$(".box-form").on("submit", (e) =>{
    e.preventDefault()
    let formArray = $('.box-form').serializeArray();
    if(formArray[0].value == "" || formArray[1].value == ""){
        Swal.fire(
            'Se esqueceu?',
            'Preencha os dados!',
            'question'
          )
    }else{
        $.ajax({
            url: "../controllers/callAction.php",
            type: 'POST',
            data: {
                action: "Logou",
                email: formArray[0].value,
                senha: formArray[1].value
            },
            success: function(data){
                console.log(data)
                if(data == true){
                    location.href = "../index.php"
                }else{
                    Swal.fire(
                        'Erro!',
                        'Login ou Senha incorretos!',
                        'error'
                      )
                }
            },
            error: function(textStatus){
                console.log(textStatus)
            }
        })
    }

})