function logar(){
    var nome = document.querySelector("#nome").value;
    var senha = document.querySelector("#senha").value;

    if(nome == ""){
        var resultado_nome = document.getElementById("resultado_name");
        resultado_nome.style.color = "red";
        resultado_nome.innerHTML = "Este campo eh obrigatorio.";
    }
    if(senha == ""){
        var resultado_senha = document.getElementById("resultado_senha");
        resultado_senha.innerHTML = "Este campo eh obrigatorio.";
        resultado_senha.style.color = "red";
    }

}
