## Preguntas de EMMET

1)	#page>div.logo+ul#navigation>li*5>a{Item $}

    <div id="page">
      <div class="logo"></div>
      <ul id="navigation">
        <li><a href="">Item 1</a></li>
        <li><a href="">Item 2</a></li>
        <li><a href="">Item 3</a></li>
        <li><a href="">Item 4</a></li>
        <li><a href="">Item 5</a></li>
      </ul>
    </div>

2)	¿Qué macro Emmet produce este código?

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
</head>
<body>

</body>
</html>

    html:5

3)	Escriba la expresión emmet para producir este código HTML:

<div>
 <dl>
  <dt></dt>
  <dd></dd>
  <dt></dt>
  <dd></dd>
  <dt></dt>
  <dd></dd>
 </dl>
</div>

<footer>
  <p></p>
</footer>

    % div>(dl>(dt+dd)*3)+footer>p

4) Escriba la expresión emmet para producir este código HTML:

<ul>
  <li class="item5"></li>
  <li class="item4"></li>
  <li class="item3"></li>
  <li class="item2"></li>
  <li class="item1"></li>
</ul>

    ul>li.item$*5

## Preguntas de JSON

1)	¿Cuál es el código para, dado un objeto x obtener su representación en una cadena en formato JSON?

    JSON.stringify(x)

2)	¿Cómo obtengo un objeto como el descrito por una cadena y en formato JSON?

    JSON.parse(x)

## Preguntas clausuras

1)	Escriba una función enumerador que retorne una función que es un enumerador:

var enteroUnico = enumerador();
enteroUnico(); // 0
enteroUnico(); // 1

Use una clausura de modo que la variable interna que es usada como contador sea inaccesible salvo vía la función retornada.

    var enteroUnico = enumerador(){
     var contador =0;
     return enumerador () {return contador++;}
    }();

    enteroUnico(); // 0
    enteroUnico(); // 1
