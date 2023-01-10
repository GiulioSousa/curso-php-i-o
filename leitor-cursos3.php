<?php

/* $cursos = file_get_contents('lista-cursos.txt');
// Esta função abre um arquivo, busca todo o conteúdo, retornar o conteúdo como uma string e fecha o arquivo.

echo $cursos; */

//Esta função simplifica e muito o uso do código, mas dependendo do contexto, os métodos anteriores podem ser mais viável para uma tarefa mais específica

$cursos = file('lista-cursos.txt');
//file faz todo o processo do file_get_contents, mas retorna um array com cada linha sendo um ínmdice desse array.

var_dump($cursos);
