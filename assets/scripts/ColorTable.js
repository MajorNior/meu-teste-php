// Obtendo as referências dos botões de visualização
var greenButton = document.querySelector('.dashboard-stat.green .more');
var blueButton = document.querySelector('.dashboard-stat.blue .more');
var purpleButton = document.querySelector('.dashboard-stat.purple .more');

// Obtendo a referência da tabela e das linhas da tabela
var table = document.querySelector('.portlet.box.grey');
var tableRows = table.querySelectorAll('tbody tr');

// Adicionando os ouvintes de evento de clique aos botões de visualização
greenButton.addEventListener('click', function() {
  // Definindo a cor de fundo da tabela como verde
  table.style.backgroundColor = 'green';

  // Definindo a fonte como negrito e a cor do texto como branco
  for (var i = 0; i < tableRows.length; i++) {
    var rowText = tableRows[i].querySelectorAll('td');
    for (var j = 0; j < rowText.length; j++) {
      rowText[j].style.fontWeight = 'bold';
      rowText[j].style.color = 'white';
    }
  }
});

blueButton.addEventListener('click', function() {
  // Definindo a cor de fundo da tabela como azul
  table.style.backgroundColor = 'blue';

  // Definindo a fonte como negrito e a cor do texto como branco
  for (var i = 0; i < tableRows.length; i++) {
    var rowText = tableRows[i].querySelectorAll('td');
    for (var j = 0; j < rowText.length; j++) {
      rowText[j].style.fontWeight = 'bold';
      rowText[j].style.color = 'white';
    }
  }
});

purpleButton.addEventListener('click', function() {
  // Definindo a cor de fundo da tabela como roxa
  table.style.backgroundColor = 'purple';

  // Definindo a fonte como negrito e a cor do texto como branco
  for (var i = 0; i < tableRows.length; i++) {
    var rowText = tableRows[i].querySelectorAll('td');
    for (var j = 0; j < rowText.length; j++) {
      rowText[j].style.fontWeight = 'bold';
      rowText[j].style.color = 'white';
    }
  }
});

// Adicionando o comportamento de alterar a cor do texto para preto quando passar o mouse sobre a linha
for (var i = 0; i < tableRows.length; i++) {
  tableRows[i].addEventListener('mouseover', function() {
    var rowText = this.querySelectorAll('td');
    for (var j = 0; j < rowText.length; j++) {
      rowText[j].style.color = 'black';
    }
  });

  tableRows[i].addEventListener('mouseout', function() {
    var rowText = this.querySelectorAll('td');
    for (var j = 0; j < rowText.length; j++) {
      rowText[j].style.color = 'white';
    }
  });
}
