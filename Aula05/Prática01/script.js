function getValor1(){
    return parseFloat(document.getElementById("pri_numero").value);
}

function getValor2(){
    return parseFloat(document.getElementById("sec_numero").value);
}

function Soma() {
    Resultado(getValor1() + getValor2());
}

function Subtrai() {
    Resultado(getValor1() - getValor2());
}

function Multiplica() {
    Resultado(getValor1() * getValor2());
}

function Divide() {
    Resultado(getValor1() / getValor2());
}

function Resultado(valor){
    var result = document.getElementById("resultado");
    result.value = valor;

    if (valor > 0){
        result.style = "color: green"
    }
    else if (valor < 0){
        result.style = "color: red"
    }
    else{
        result.style = "color: gray"
    }

}