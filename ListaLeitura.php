<?php
$myBooks = new ListaLeitura();

$myBooks->push('Um Sonho de Verao');
$myBooks->push('Os Ventos de Inverno');

echo $myBooks->top(); // MOSTRA O TOPO DA PILHA
