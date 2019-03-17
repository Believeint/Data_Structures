<?php
class Pilha // CRIA A PILHA
{
    public $qtdlivros=5; //TAMANHO 5; TAMANHO DA PILHA
    public $livros=array(); // CRIA UMA ARRAY PARA ARMAZENAR OS LIVROS
    public $contador=0; // CONTADOR RECEBE 0 ; CONTADOR PARA AUXILIAR NA CONTAGEM
    

    public function push($dados) // FUNCAO PUSH (COM PARAMETRO PARA RECEBER DADOS)
    {
        if ($this->contador >= $this->qtdlivros) {  // SE CONTADOR >= TAMANHO DA PILHA -> (MENSAGEM)
            echo "A Pilha esta cheia, Nao foi possivel inserir";
        } else { // SENAO POSICAO ATUAL DO ARRAY RECEBE OS DADOS (PUSH) E CONTADOR INCREMENTA EM UM
            $this->livros[$this->contador]=$dados;
            $this->contador++;
        }
    }
    
    public function pop()   // FUNCAO PUSH
    {
        if (empty($this->livros)) { // SE ARRAY LIVROS ESTIVER  VAZIA -> MENSAGEM
            echo "A Pilha esta vazia, Nao foi possivel remover";
        } else {    // SENAO REMOVA ULTIMA POSICAO
            array_pop($this->livros);
        }
    }

    public function top()
    {
        echo($this->livros);
    }

    public function isEmpty()
    {
        return empty($this->Pilha);
    }
}

$Pilha = new Pilha();   // INSTANCIA DA CLASSE PILHA

$Pilha->push("Ouro de Tolo");
$Pilha->push("A Criacao");
$Pilha->top();
