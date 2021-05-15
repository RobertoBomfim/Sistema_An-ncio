# Sistema de Anúncios
Este sistema tem por finalidade cadastrar anúncios, e com base nas informações coletadas emitir relatórios sobre estes.

- Como executar:

1° Faça o download ou clone do repósitorio;

2° Extraia a pasta do arquivo zipado para dentro da pasta do seu servidor local; (Caso não tenha nenhum instalado indico o XAMPP que vem com as ferramentas necessárias)

3° Inicialize seu servidor e banco de dados local; 

4° Abra seu navegador de internet e na barra de endereço digite localhost\sistema_anuncio

Após essa última etapa é esperado que a tela de preenchimento do formulário para cadastro de anúncio seja aberta. 

Obs: Caso seu banco de dados local possua senha, abra o arquivo config.php em um editor de texto ou IDE e na variável $dbsenha coloque sua senha entre as aspas duplas.

* Como utilizar:
- Na tela inicial do sistema aparece um formulário para cadastrar um anúncio, se quiser fazer um cadastro basta preencher os campos solicitados e clicar no botão "Cadastrar" no final do formulário. Caso queira emitir um relatório basta clicar no botão "Relatório" ao lado do botão Cadastrar.
 
- Clicando no botão Relatório você será direcionado à um formulário para filtragem de informação. Basta preencher as informações solicitadas e clicar no botão "Emitir". Ao clicar em Emitir será impresso na tela as informações de acordo com os dados informados na filtragem.
