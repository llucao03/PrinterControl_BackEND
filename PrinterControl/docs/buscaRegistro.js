function atualizaAtela(){
    const textoDigitado = document.getElementById('inputPesquisa').value.trim().toLowerCase(); //seleciona o input de pesquisa
    const rows = document.querySelectorAll('#listaRegistrosBody tr'); //seleciona a tabela que ira aparecer na tela

    rows.forEach(row => {//intera sobre todas as linhas
        const celulaSelecionada = row.querySelectorAll('td:nth-child(2)'); //crie uma variavel para armazenar a segunda celula
        //das colunas

        let temOdado = false; //crie uma variavel de controle

        celulaSelecionada.forEach(celulaSelecionada => { //intera sobre as linhas 
            if (celulaSelecionada.textContent.toLowerCase().includes(textoDigitado)) { //verifica se elas contem os texto escrito
                temOdado = true; //se tiver a variavel de controle vira true 
            }
        });

        if (temOdado) { // sendo true ela exibe o dado
            row.style.display = ''; 
        } else {
            row.style.display = 'none'; //sendo false ela não exibe nenhum
        }
    });
}
    

