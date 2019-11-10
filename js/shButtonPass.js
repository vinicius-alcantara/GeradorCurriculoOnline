function shSenha(){
    var tipo = document.getElementById("iSenhaLogin");
        if(tipo.type === "password"){
            tipo.type = "text";
                var shbtn = document.getElementById("btn-pass");
                    shbtn.innerHTML = "<button id='eye' type='button' class='btn fas fa-eye' onclick='shSenha()'></button>";
        } else {
            tipo.type = "password";
            var shbtn = document.getElementById("btn-pass");
                shbtn.innerHTML = "<button id='eye' type='button' class='btn fas fa-eye-slash' onclick='shSenha()'></button>";

        }

}