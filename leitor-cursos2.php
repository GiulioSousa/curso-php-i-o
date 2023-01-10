<?php

 $arquivo = fopen('lista-cursos.txt', 'r');
// $tamanhoDoArquivo = 10;
$tamanhoDoArquivo = filesize('lista-cursos.txt'); // Exibe o tamanho to arquivo em bytes / quantidade de caracteres.

$cursos = fread($arquivo, $tamanhoDoArquivo); // File read - Faz a leitura do arquivo com os parâmetros passados.

// echo $tamanhoDoArquivo;
echo $cursos;

// echo fread($arquivo, filesize('lista-cursos.txt'));

fclose($arquivo);

//fread faz a leitura do arquivo como um todo de uma vez para então processar e retornar os dados
//Em casos de arquivos muito grandes, é recomendado usar o método de while do arquivo anterior
