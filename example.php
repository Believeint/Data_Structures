<?php
$l = new SPLDoublyLinkedList();
$l->setIteratorMode(SplDoublyLinkedList::IT_MODE_DELETE);
$l->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

$mode = $l->getIteratorMode();
var_dump("MODE: $mode");
var_dump("MODE CHECKS");
var_dump(($mode & SplDoublyLinkedList::IT_MODE_LIFO) == SplDoublyLinkedList::IT_MODE_LIFO);
var_dump(($mode & SplDoublyLinkedList::IT_MODE_FIFO) == SplDoublyLinkedList::IT_MODE_FIFO);
var_dump(($mode & SplDoublyLinkedList::IT_MODE_DELETE) == SplDoublyLinkedList::IT_MODE_DELETE);
var_dump(($mode & SplDoublyLinkedList::IT_MODE_KEEP) == SplDoublyLinkedList::IT_MODE_KEEP);

$l->push('A');
$l->push('B');
$l->push('C');
$l->push('D');
$l->rewind();

var_dump("Traversing");
var_dump($l->isEmpty());

var_dump($l->count());
var_dump($l->current());
$l->next();

var_dump($l->count());
var_dump($l->current());
$l->next();

var_dump($l->count());
var_dump($l->current());
$l->next();

var_dump($l->count());
var_dump($l->current());
$l->next();

var_dump($l->count());
var_dump($l->isEmpty());
