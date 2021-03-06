## Exame 2018-01-17

### Pergunta 1

No elementos HTML, os atributos booleanos podem ser declarados como:

- a. De duas formas: attribute ou attribute="attribute". :heavy_check_mark:
- b. Os elementos HTML não podem conter atributos booleanos.
- c. Apenas como: attribute="attribute".
- d. Apenas como: attribute.

### Pergunta 2

Em relação ao atributo global id de um documento HTML:

- a. O id tem de ser único mas cada elemento pode ter vários ids.
- b. O id pode ser repetido e cada elemento pode ter vários ids.
- c. O id pode ser repetido mas cada elemento apenas pode ter um id.
- d. O id tem de ser único e cada elemento apenas pode ter um id. :heavy_check_mark:

### Pergunta 3

Em HTML 5, o elemento article representa:

- a. Uma notícia num jornal.
- b. Um post num blog.
- c. Um elemento que pode ser facilmente substituído.
- d. Uma composição de elementos auto-contida num documento. :heavy_check_mark:

### Pergunta 4

Em CSS, ao alterarmos as propriedades top, right, bottom e left de um elemento com
posição (position) absolute, estamos a alterar a sua posição em relação a:


- a. Janela do browser.
- b. Documento HTML.
- c. Pai do elemento.
- d. Primeiro pai não estático (static). :heavy_check_mark:

### Pergunta 5

Em CSS, qual é a forma correcta de seleccionar o primeiro elemento de cada uma das
seguintes listas?

```html
<ul>
    <li>Seleccionar</li>
    <li>Não Seleccionar</li>
    <li>Não Seleccionar</li>
</ul>
<ul>
    <li>Seleccionar</li>
    <li>Não Seleccionar</li>
    <li>Não Seleccionar</li>
</ul>
```

- a. `ul :ﬁrst-child li`
- b. `ul li :ﬁrst-child`
- c. `ul li:ﬁrst-child` :heavy_check_mark:
- d. `ul:ﬁrst-child li`

### Pergunta 6

Em CSS, por omissão, os atributos width e height representam:

- a. A largura e altura do conteúdo do elemento mais o seu padding.
- b. Apenas a largura e altura do conteúdo do elemento. :heavy_check_mark:
- c. A largura e altura do conteúdo do elemento mais o seu padding e border.
- d. A largura e altura do conteúdo do elemento mais o seu padding, border e margin.

### Pergunta 7

Em PHP, para além de compararem os valores da variáveis, os operadores de
comparação strict também veriﬁcam:

- a. Se é possível converter uma variável na outra.
- b. Se as variáveis têm a mesma posição de memória.
- c. Se os tipos das variáveis são os mesmos. :heavy_check_mark:
- d. Se ambas as variáveis são diferentes de null.

### Pergunta 8

Qual é o signiﬁcado do termo global no seguinte pedaço de código PHP?
```php
function foo() {
    global $bar;
    ...
}
```

- a. Depois da função ser chamada, a variável bar passa a ser global.
- b. A variável bar é sempre passada por referência para a função.
- c. Dentro da função, a variável bar refere-se a uma variável global. :heavy_check_mark:
- d. A variável bar é global mesmo que a função não seja chamada.

### Pergunta 9

Considere o seguinte código JavaScript:
```js
function changeColor(color) {
    this.style.color = color;
}

let foo = document.getElementById('foo');
...
```

Qual deverá ser a próxima linha de forma a que o elemento foo mude para azul quando
clicado?

- a. `foo.addEventListener('click', changeColor.bind(foo, 'blue'));` :heavy_check_mark:
- b. `foo.addEventListener('click', changeColor('blue'));`
- c. `foo.addEventListener('click', changeColor.bind('blue'));`
- d. `foo.addEventListener('click', changeColor.call(foo, 'blue'));`

### Pergunta 10

Qual das seguintes é uma propriedade fundamental de uma arquitectura REST?

- a. URLs devem identiﬁcar recursos e não acções. :heavy_check_mark:
- b. Quantidade de dados transferida deve ser o mais pequena possível.
- c. URLs bonitos (e.g. http://www.example.com/employees/1234/ em vez de http://www.example.com/employees.php?id=1234)
- d. URLs devem identiﬁcar acções e não recursos.

### Pergunta 11

Os browsers vêm pré-instalados com alguns certiﬁcados digitais root. Para que servem?

- a. Para veriﬁcar a autenticidade das chaves públicas dos servidores. :heavy_check_mark:
- b. Para criar chaves privadas criptograﬁcamente seguras.
- c. Para permitir o armazenamento de palavras-chave localmente de uma forma segura.
- d. Para garantir que os ﬁcheiros chave do browser não foram alterados.

### Pergunta 12

Qual das seguintes não é uma medida eﬁcaz contra ataques de força bruta a palavras chave?

- a. Forçar a que todos os utilizadores tenham palavras-chave diferentes. :heavy_check_mark:
- b. Aumentar o tempo entre tentativas consecutivas de login.
- c. Usar controlos de qualidade de forma a forçar que os utilizadores usem palavras chave mais seguras.
- d. Usar uma função de hash lenta.

### Informação
Considere o seguinte excerto de código HTML:
```html
<section id="foo">
    <ul class="bar">
        <li class="first">A</li>
        <li>B</li>
        <li>C</li>
        <li>D</li>
    </ul>
</section>
```

E as seguintes regras CSS:
```css
#foo ul {font-size: 12px}                       /*R1*/
section ul li {font-size: 13px}                 /*R2*/
section#foo > :first-child {font-size: 14px}    /*R3*/
.bar :first-child {font-size: 15px}             /*R4*/
section .bar li + li {font-size: 16px}          /*R5*/
ul.bar {font-size: 17px}                        /*R6*/
```

Usando a seguinte notação:
```
a,b,c,d
```

Por exemplo:
```
0,2,0,1
```

Indique a especiﬁcidade de cada regra.

### Pergunta 13

Qual é a especiﬁcidade da regra R1?

`0,1,0,1`

### Pergunta 14

Qual é a especiﬁcidade da regra R2?

`0,0,0,3`

### Pergunta 15

Qual é a especiﬁcidade da regra R3?

`0,1,1,1`

### Pergunta 16

Qual é a especiﬁcidade da regra R4?

`0,0,2,0`

### Pergunta 17

Qual é a especiﬁcidade da regra R5?

`0,0,1,3`

### Pergunta 18

Qual é a especiﬁcidade da regra R6?

`0,0,1,1`

### Pergunta 19

Sabendo que o valor por omissão do atributo font-size para o elemento section é 20px e
que todos os outros elementos têm font-size inherit, qual será o valor do font-size do
primeiro elemento da lista depois de todas as regras serem aplicadas?

Resposta: 15px.

As regras que se aplicam diretamente são R2 e R4. R1 aplica-se ao `<ul>`; R3 aplica-se ao primeiro elemento que é filho do seu pai, em que o elemento é filho direto de `section#foo` (que corresponde ao `<ul>`).

### Informação
Considere a seguinte string:
```
How many cookies could a good cook cook If a good cook could cook cookies
```

Para cada uma das expressões regulares apresentadas de seguida, copie a string e acrescente parênteses rectos em volta do primeiro match. Não altere a string de nenhuma outra forma.

Exemplo de resposta:
```
How many [cookies ]could a good cook cook If a good cook could cook cookies
```

Se a expressão regular não ﬁzer qualquer *match*, responda com a string original sem alterações.

### Pergunta 20

```
/c.+k/
```

Resposta: `How many c[ookies could a good cook cook If a good cook could cook coo]kies`

### Pergunta 21

```
/[co]{3}/
```

Resposta: `How many [coo]kies could a good cook cook If a good cook could cook cookies`

### Pergunta 22

```
/[^c](.)\1/
```

Resposta: `How many cookies could a [goo]d cook cook If a good cook could cook cookies`

### Pergunta 23

```
/c.{1,10}$/
```

Resposta: `How many cookies could a good cook cook If a good cook could cook [cookies]`

### Pergunta 24

```
/(?<=oo)d/
```

Resposta: `How many cookies could a goo[d] cook cook If a good cook could cook cookies`

### Pergunta 25

```
/(c.+?k).*?\1/
```

Resposta: `How many [cookies could a good cook] cook If a good cook could cook cookies`

### Informação

Considere o seguinte excerto de código HTML:
```html
<section id="game">
    <ul><li>O</li><li>R</li><li>A</li><li>D</li></ul>
    <input type="text" name="guess">
    <input type="button" name="reset" value="Reset">
    <input type="button" name="send" value="Send">
</section>
```

Considere ainda que a página pode conter outros elementos do tipo *section*, *ul*, *li* e *input*.

### Pergunta 26

Escreva o código JavaScript necessário para que, quando o utilizador clique num dos itens da lista e esse item não contiver a classe "*used*":
- A classe "used" seja acrescentada ao item.
- O texto (letra) do item clicado seja adicionado ao ﬁm do input de texto.

Nota: Considere que o script foi carregado usando o atributo defer.

Resposta:
```js
let textEl = document.querySelector('section#game input[type="text"]');
let listItemsElList = document.querySelectorAll('section#game ul li');

for(let i = 0; i < listItemsElList.length; ++i){
    let listItemEl = listItemsElList[i];
    listItemEl.addEventListener('click', function(){

        if(listItemEl.className.indexOf('used') == -1){
            listItemEl.className += (listItemEl.className == '' ? '' : ' ') + 'used';
            textEl.value += listItemEl.innerHTML;
        }
    });
}
```

### Pergunta 27

Escreva o código JavaScript necessário para que, quando o utilizador clique no botão de reset:
- A classe "used" seja retirada de todos os elementos da lista.
- O input de texto seja limpo.

```js
let textEl = document.querySelector('section#game input[type="text"]');
let resetEl = document.querySelector('section#game input[name="reset"]');
let listItemsElList = document.querySelectorAll('section#game ul li');

resetEl.addEventListener('click', function(){
    for(let i = 0; i < listItemsElList.length; ++i){
        let listItemEl = listItemsElList[i];
        listItemEl.className = listItemEl.className.replace('used', '');
    }
    textEl.value = "";
});
```

### Pergunta 28

Escreva o código JavaScript necessário para que, quando o utilizador clique no botão send:
- Seja feito um pedido Ajax do tipo POST para uma página chamada is_guess_correct.php.
- Este pedido deve enviar um pârametro de texto, chamado guess, contendo o valor actual do input de texto.
- O resultado pode ser um dos seguintes:
```json
{"result":"wrong"}
```
Nesse caso deve ser mostrada uma caixa de diálogo com o texto "WRONG", ou:
```json
{"result":"correct","word":["C","A","T"]}
```
Nesse caso:
- O input de texto deve ser limpo.
- Os itens da lista devem ser substituídos por itens novos contendo as letras recebidas no parâmetro word.

**Nota:** Pode assumir que existe uma função de ajuda chamada encodeForAjax().

```js
let textEl          = document.querySelector('section#game input[type="text"]');
let sendEl          = document.querySelector('section#game input[name="send"]');
let listEl          = document.querySelectorAll('section#game ul');
let listItemsElList = document.querySelectorAll('section#game ul li');

sendEl.addEventListener('click', function(){
    let request = new XMLHTTPRequest();
    request.open("POST", "is_guess_correct.php", true);
    request.onload = function(){
        let res = JSON.parse(request.responseText);
        if(res.result === "wrong")
            alert("WRONG");
        else {
            textEl.value = "";
            for(let i = 0; i < listItemsElList.length; ++i){
                let listItemEl = listItemsElList[i];
                listItemEl.remove();
            }
            for(let i = 0; i < res.word.length; ++i){
                let newItem = document.createElement('li');
                newItem.innerHTML = `${res.word[i]}`;
                listEl.append(newItem);
            }
        }
    };
    let guess = textEl.value;
    request.send(encodeForAjax({
        guess: guess
    }));
});
```

### Informação
Considere o seguinte documento XML:
```xml
<recipes>
    <recipe difficulty="medium">
        <name>Apple Pie</name>
        <description>A delicious type of pie</description>
        <ingredients>
            <ingredient>Apple</ingredient>
            <ingredient>Butter</ingredient>
            <ingredient>Sugar</ingredient>
            <ingredient>Flour</ingredient>
        </ingredients>
    </recipe>
    <recipe difficulty="low">
        <name>Mixed Toast</name>
        <ingredients>
            <ingredient>Bread</ingredient>
            <ingredient>Ham</ingredient>
            <ingredient>Cheese</ingredient>
        </ingredients>
    </recipe>
</recipes>
```

Considere ainda que o nodo de contexto é a raiz do documento. Escreva as expressões XPath que seleccionem os seguintes elementos:

### Pergunta 29

O nome de todas as receitas.

Resposta: `/recipes/recipe/name/text()`

### Pergunta 30

O nome de todas as receitas com uma diﬁculdade média (*medium*).

Resposta: `/recipes/recipe[@difficulty='medium']/name/text()`

### Pergunta 31

A diﬁculdade (diﬁculty) de todas as receitas contendo uma descrição (description).

Resposta: `/recipes/recipe[count(description)>0]/@difficulty`

### Pergunta 32

O nome de todas as receitas com mais de 3 ingredientes.

Resposta: `/recipes/recipe[count(ingredients/ingredient)>3]/name/text()`
