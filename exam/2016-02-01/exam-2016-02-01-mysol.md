## Exame 2016-02-01

### Parte 1

#### Pergunta 1
Que atributo é usado para definir que inputs do tipo radio pertencem ao mesmo grupo?
- O atributo group.
- O atributo name. :heavy_check_mark:
- O atributo label.
- O atributo id.

#### Pergunta 2
Os codificadores dependentes do contexto (context aware encoders) são usados quando queremos fazer output de dados em que não confiamos. Que tipo de ataque tentam prevenir?
- CSRF (Cross-site Request Forgery).
- SQL Injection.
- XSS (Cross-site Scripting). :heavy_check_mark:
- Path Traversal Attack.

#### Pergunta 3
Quando nos ligamos a um servidor usando o protocolo HTTPS, é usada um esquema de chave pública e chave privada. Como é que se garante que a chave pública transmitida pelo servidor é realmente desse servidor e que não estamos a sofrer um man in the middle attack?
- A chave foi obtida através de um servidor de chaves seguro.
- As chaves públicas contêm um checksum que permite verificar a sua validade.
- A chave foi assinada por uma entidade certificadora reconhecida pelo browser. :heavy_check_mark:
- A chave é transmitida através de um mecanismo seguro (TLS).

#### Pergunta 4
No protocolo HTTP, qual do seguintes métodos não é idempotente?
- GET
- DELETE
- POST :heavy_check_mark:
- HEAD

#### Pergunta 5
O que é impresso pelo seguinte código PHP:
```php
$a = array('a', 'b', 'c');
foreach ($a as $b => $c)
  echo $b;
```

É impresso os índices do array, nomeadamente
```txt
012
```

#### Pergunta 6
Assuma que o seguinte código jQuery se encontra definido dentro do evento ready de um documento HTML. Analise, com atenção, o código e indique qual o comportamento esperado:

```js
alert($('a').css('color'));
```
- Aparece uma caixa de diálogo com a cor de todos os links do documento.
- Aparece uma caixa de diálogo para cada link do documento com a sua cor.
- Aparece uma caixa de diálogo com a cor do primeiro link do documento.
- Aparece um erro na consola pois não podemos fazer alert de um array. :heavy_check_mark:

#### Pergunta 7
Em XPath, qual é o eixo por omissão?
- element
- parent
- comment
- child :heavy_check_mark:

#### Pergunta 8
Em XSD, o que significa o atributo fixed no seguinte código?
```xml
<xs:attribute name="value" type="xs:integer" fixed="5"/>
```

- O atributo tem de estar sempre presente e o valor tem de ser sempre 5.
- O valor do atributo é 5 por omissão.
- Se o atributo estiver presente, tem de ter o valor 5.
- O atributo tem de aparecer 5 vezes.

### Parte 2

#### Pergunta 1
Considere o seguinte código HTML:
```html
<div id="profile" class="box">
  <h2 class="name">John Doe</h2>
  <ul>
    <li><a href="www.johndoe.com">Website</a></li>
    <li class="phone">111-222-333</li>
    <li class="address">Saint Doe Street, 123</li>
  </ul>
</div>
```

E o seguinte código CSS:
```css
ul li:first-child     { color: red      ;} /* R1 */
#profile.box .name    { color: blue     ;} /* R2 */
#profile li ~ li ~ li { color: green    ;} /* R3 */
#profile .address     { color: magenta  ;} /* R4 */
div ul li.address     { color: yellow   ;} /* R5 */
a                     { color: cyan     ;} /* R6 */
```

##### Item (a)
Indique a especificidade de cada uma das regras (e.g. 0,2,2,1):

| R1      | R2      | R3      | R4      | R5      | R6      |
|---------|---------|---------|---------|---------|---------|
| 0,0,1,2 | 0,1,2,0 | 0,1,0,3 | 0,1,1,0 | 0,0,1,3 | 0,0,0,1 |

##### Item (b)
Considerando apenas as regras de R1 a R3, indique a cor de cada um dos textos:

| John Doe | Website | 111-222-333 | Saint Doe Street, 123 |
|----------|---------|-------------|-----------------------|
| blue     | blue    | black       | green                 |

##### Item (c)

Considerando todas as regras, indique a cor de cada um dos textos:

| John Doe | Website | 111-222-333 | Saint Doe Street, 123 |
|----------|---------|-------------|-----------------------|
| blue     | cyan    | black       | magenta               |

#### Pergunta 2
Considere a seguinte string:
```txt
How many yaks could a yak pack pack if a yak pack could pack yaks
```
Para cada uma das expressões regulares apresentadas de seguida, sublinhe qual o primeiro match:

| Item |  Regex               | Resposta                                                              |
|------|----------------------|-----------------------------------------------------------------------|
| (a)  | `/pack.*pack/`       | `How many yaks could a yak [pack pack if a yak pack could pack] yaks` |
| (b)  | `/[pack]{2}/`        | `How many y[ak]s could a yak pack pack if a yak pack could pack yaks` |
| (c)  | `/(yak|pack).*\1/`   | `How many [yaks could a yak pack pack if a yak pack could pack yak]s` |
| (d)  | `/[^aeiou]{3}/`      | `Ho[w m]any yaks could a yak pack pack if a yak pack could pack yaks` |
| (e)  | `/(?<!ya)k/`         | `How many yaks could a yak pac[k] pack if a yak pack could pack yaks` |
| (f)  | `/(\w{3,}?).*?\1/`   | `How many [yaks could a yak] pack pack if a yak pack could pack yaks` |

#### Pergunta 3
Considere o seguinte excerto HTML que representa um teclado virtual que pretende impedir ataques usando keyboard loggers:
```html
<form id="pin" method="post">
  <input type="text" name="username">
  <input type="text" name="pin">
  <input type="submit" value="Verify">
</form>
<div id="keypad">
  <a href="#">1</a><a href="#">2</a>
  <a href="#">4</a><a href="#">5</a>
  <a href="#">7</a><a href="#">8</a>
</div>

<a href="#">3</a><br>
<a href="#">6</a><br>
<a href="#">9</a><br>
```

Considere que pode haver outros elementos `a`, `input` e `submit` no documento. Escreva o código jQuery
necessário para que:

##### Item (a)
Quando o utilizador clique num dos números do teclado virtual, o valor desse número seja acrescentado ao valor do input com o nome pin.

##### Item (b)
Quando o botão de submit seja clicado, os valores dos inputs username e pin sejam enviados, em duas variáveis com nome username e pin, num pedido Ajax do tipo POST para o endereço verify pin.php. Caso a resposta indique que o pin não é válido, o border do input pin deve passar a vermelho e o seu valor deve ser apagado. Considere que o resultado, em JSON, vem no seguinte formato:

```json
{"valid": "true"} ou {"valid": "false"}.
```

#### Pergunta 4

Crie um documento XML que seja bem formado e válido segundo o seguinte XSD:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
  <xs:complexType name="elementType">
    <xs:sequence>
      <xs:element name="title" type="xs:string"/>
    </xs:sequence>
    <xs:attribute name="num" type="xs:integer"/>
  </xs:complexType>
  <xs:complexType name="groupType">
    <xs:sequence>
      <xs:element name="element" type="xs:integer" maxOccurs="unbounded" minOccurs="2"/>
    </xs:sequence>
  </xs:complexType>
  <xs:complexType name="descriptionType">
    <xs:sequence>
      <xs:element name="element" type="elementType" maxOccurs="unbounded"/>
      <xs:element name="group" type="groupType" maxOccurs="unbounded" minOccurs="2"/>
    </xs:sequence>
  </xs:complexType>
  <xs:element name="description" type="descriptionType">
    <xs:key name="elementKey">
      <xs:selector xpath="element"/>
      <xs:field xpath="@num"/>
    </xs:key>
    <xs:keyref name="elementRef" refer="elementKey">
      <xs:selector xpath="group/element"/>
      <xs:field xpath="."/>
    </xs:keyref>
  </xs:element>
</xs:schema>
```