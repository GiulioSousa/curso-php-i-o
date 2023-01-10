<?php

$arquivo = fopen('lista-cursos.txt', 'r'); // File Open - abre/acessa um arquivo

while (!feof($arquivo)) { // File End of file - Verifica se a leitura chegou ao final do arquivo
    $curso = fgets($arquivo); //File get string - Faz a leitura de uma linha e posiciona o cursor no final da linha.
    echo $curso;
}

fclose($arquivo); // File close - Fecha o arquivo se estiver aberto