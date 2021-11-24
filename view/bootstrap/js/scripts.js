'use strict';

const limparForm = () => {
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('uf').value = '';
}

//inserindo dados retornados do webservice nos formularios
const preencherForm = (endereco) => {
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('uf').value = endereco.uf;
}

//validando quantidade maxima de digitos e se são apenas numeros
const cepValido = (cep) => cep.length == 8 && /^[0-9]+$/.test(cep);

//consultando o webservice e tratando os dados retornados
const pesquisarCep = async() => {
    const cep = document.getElementById('cep').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)) {
        const dados = await fetch(url);
        const endereco = await dados.json();

        //validando se o cep existe ou é valido   
        if (endereco.hasOwnProperty('erro')) {
            limparForm();
            alert("CEP não encontrado.");
        } else {
            preencherForm(endereco);
        }
    } else {
        limparForm();
        alert("CEP inválido.");
    }
}

//pegando o cep digitado no formulario
document.getElementById('cep').addEventListener('focusout', pesquisarCep);