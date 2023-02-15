// Criando um objeto JSON
var pessoa = {
  nome: "João",
  idade: 30,
  cidade: "São Paulo"
};

// Convertendo o objeto JSON em uma string JSON
var pessoaJSON = JSON.stringify(pessoa);

// Exibindo a string JSON
console.log(pessoaJSON);

// Convertendo a string JSON em um objeto JSON
var pessoaObjeto = JSON.parse(pessoaJSON);

// Exibindo uma propriedade do objeto JSON
console.log(pessoaObjeto.nome);
