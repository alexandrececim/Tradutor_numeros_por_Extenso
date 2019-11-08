# Tradutor de numeros por Extenso
## Objetivo

Este pequeno programa Webserver que recebe via GET um valor no intervalo 
entre -99999 e 99999 e retorna em um JSON cuja chave é 'extenso'.

## Linguagem de programação aplicada
A linguagem de programação é o PHP onde emprega-se o paradigma da Orientação a Objeto e aplica o padrão de arquiterura MVC e a tecnica Clean Code e Testes Unitários.

## Ferramentas utilizadas
* git
* Docker
* VS code
* github

## Instalação
Facilidade de utlizar o Docker, bastar gerar o seu conteiner a partir do nosso 
arquivo (docker-composer.yml) e 'startar' o conteiner chamado ('sua_pasta'_php).

## Utilização
Já devidamente iniciado o conteiner conforme orientação acima, pode-se acessar o navegador (browser) e digitar 'localhost:80/' seguido do valor escolhido que seja entre -99999 e 99999, exemplo: 'http://localhost:80/94587'.

Apartir da pasta onde foi descarregada os codigos fontes, tudo o que for alterado na pasta */www* será alterado tambem no conteiner do Docker agilizando muito possiveis alterações.

## Teste Unitário
O **Teste Unitário** está no pasta */testes* dentro de */www* onde o mesmo é possível executar os metodos (funções) e ter uma ideia da evolução do sistema e do uso da POO (programação orientada a objetos).

## Regra de Negócio aplicado
1. O sistema deve rodar como um servidor web (servidor HTTP).
2. Requisição apenas requisições GET.
3. Retornar ao solicitante um JSON cuja chave é 'extenso' e o valor seja a tradução literal dos valores recebidos por extenso dentra do intervalo já informado acima.

## Proficiência Utilizada
1. Análize de Requisitos.
2. Diagramação UML.
3. Habilidades na utilização das Ferramentas (instalação e operação):
    * git
    * Docker
    * VS code
    * github
4. Programação PHP.
5. Uso do Paradigma da Orientação a Objetos
6. Intalação de Servidores Web (servidor HTTP);
7. Criação de arquivos de testes unitários

## Objetivos:
Estou almejando uma oportunidade no mercado de Tecnologia aqui na cidade de Florianópolis, e estou com este pequeno sistema como forma de mostrar meu trabalho, agradeço a todos que poderem de alguma forma melhorar este sisteminha,seja como sugestão, ou se poder, uma indicação de trabalho que será muito bem vinda.

## Bibliografia  de consultas
http://www.linhadecodigo.com.br/artigo/3555/aprendendo-urls-amigaveis.aspx
http://phpba.com.br/docker-php/

