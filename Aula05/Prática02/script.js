alunos = new Array("João", "Maria", "José", "Paulo", "Miguel", "Julia")

var notas = [
    { nome: "João", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] },
    { nome: "Maria", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] },
    { nome: "José", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] },
    { nome: "Paulo", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] },
    { nome: "Miguel", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] },
    { nome: "Julia", notas: [10, 8, 4, 5, 10, 7, 1, 10, 9] }
];

function Media(soma){
    let qtd_notas;
    qtd_notas = 9
    let media = soma / qtd_notas;
    return media;
}


function Soma(nome_aluno){
    let alunoObj = notas.find(aluno => aluno.nome === nome_aluno);
    let soma = alunoObj.notas.reduce((total, nota) => total + nota, 0);
    return soma;
}

function Escreve_media(){
    alunos.forEach(aluno => {
        let soma = Soma(aluno)
        let media = Media(soma).toFixed(2)
        let campo = document.getElementById(aluno)
        campo.innerText = media
    });
}

function Escreve_media_notas(){
    let tabela = document.querySelector("table");
    let linhas = tabela.querySelectorAll("tbody tr");
    let colunas = tabela.querySelectorAll("thead th");
    
    let somas = Array.from(colunas).slice(1).map(() => 0); 
    let contagem = Array.from(colunas).slice(1).map(() => 0); 

    // Calcula as somas das notas de cada coluna
    linhas.forEach(linha => {
        let celulas = linha.querySelectorAll("td");
        celulas.forEach((celula, index) => {
            if (index > 0) {
                let nota = parseFloat(celula.textContent);
                if (!isNaN(nota)) {
                    somas[index - 1] += nota;
                    contagem[index - 1]++;
                }
            }
        });
    });

    somas.forEach((soma, index) => {
        let media = contagem[index] > 0 ? soma / contagem[index] : 0;
        let mediaCelula = document.getElementById(`m${index + 1}`);
        if (mediaCelula) {
            mediaCelula.innerText = media.toFixed(2);
        }
    });
}

