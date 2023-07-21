// Função para Validação de CPF
function ValidaCPF(){
    var RegraCPF = document.getElementById("RegraCPF").value;
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;
    if (cpfValido.test(RegraCPF) == true){
        console.log("CPF Válido");
    } else {
        console.log("CPF inválido");
    }

    function fMasc(objeto, mascara) {
        obj = objeto
        masc = mascara
        setTimeout("fMascEx()", 1)
    }

    function fMascEx() {
        obj.value = masc(obj.value)
    }

    function mCPF(cpf){
        cpf = cpf.replace(/\D/g,"")
        cpf = cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf = cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return cpf
    }

} 