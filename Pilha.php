<?php
class ListaLeitura  // CRIACAO DE CLASS
{
    public $pilha;
    public $limite;

    public function __construct($limite = 10)
    {
        // INICIALIZA A PILHA
        $this->pilha = array(); // CRIACAO DO ARRAY
        // LIMITA A PILHA DE ACORDO COM O LIMITE
        $this->limite = $limite;
    }

    public function push($item)     // FUNCAO ADICIONAR ITEM "PUSH"
    {
        $count = ($this->pilha) ? count($this->pilha) :0;
        if ($count < $this->limite) {
            // ADICIONA O ITEM NO COMECO DA ARRAY
            array_unshift($this->pilha, $item);
        } else {
            // AVISA CASO A PILHA ESTIVER CHEIA
            throw new RunTimeException('A Pilha está Cheia!');
        }
    }

    public function pop()   // FUNCAO REMOVER ITEM "POP"
    {
        if ($this->isEmpty()) {
            // AVISA CASO A PILHA ESTIVER VAZIA
            throw new RunTimeException('A pilha está Vazia!');
        } else {
            // REMOVE O ITEM DO INICIO DA ARRAY
            return array_shift($this->pilha);
        }
    }

    public function top()
    {
        return current($this->pilha);
    }

    public function isEmpty()
    {
        return empty($this->pilha);
    }

    public function isFull()
    {
        $count = ($this->pilha) ? count($this->pilha) :0;
        if ($count >= $this->limite) {
            return "Verdadeiro";
        } else {
            return "Falso";
        }
    }
}

$MeusLivros = new ListaLeitura(); // INSTANCIA A CLASSE LISTA LEITURA -> MEUSLIVROS

// IMPLEMENTANDO AS OPERAÇÕES

$MeusLivros->push('Um sonho de Verão');
$MeusLivros->push('Os Ventos de Inverno');
$MeusLivros->push('A Dança dos Dragões');
$MeusLivros->push('O Corvo');
$MeusLivros->push('A Cabana');
$MeusLivros->push('Game of Thrones');
$MeusLivros->push('A lei do Triunfo');
$MeusLivros->push('Teoria das Cordas');
$MeusLivros->push('O Pequeno Principe');
$MeusLivros->push('A Grande Guerra');
$MeusLivros->pop();
$MeusLivros->push('O chamado');






echo '<hr>';
echo "<h1 style='text-align:center'>Pilha de Livros</h1>";
$limite = $MeusLivros->limite;
echo '<hr>';

echo "TAMANHO TOTAL: $limite";
echo '<br>';
//echo(is_array($MeusLivros->pilha) ? count($MeusLivros->pilha):0);
echo "QTD NA PILHA: " .(count($MeusLivros->pilha));
echo '<hr>';
echo "TOPO: " . $MeusLivros->top();
echo '<br>';
echo "ESTÁ CHEIA? " . $MeusLivros->isFull();
echo '<hr>';


echo '<strong>Itens na Pilha: </strong>';
echo '<br>';
echo '<br>';
foreach ($MeusLivros->pilha as $key => $value) {
    echo $value . '<br>';
}





// NESTE EXEMPLO FOI UTILIZADO ARRAY_UNSHIFT  E ARRAY_SHIFT AO INVES DE ARRAY_PUSH E ARRAY_POP, PARA QUE O PRIMEIRO ELEMENTO DA PILHA SEMPRE SEJA O TOPO. VOCÊ PODERIA
//UTILIZAR ARRRAY_PUSH E ARRAY_POP PARA MANTER CONSISTENCIA SEMANTICA, NESSE CASO O ULTIMO ELEMENTO SE TORNA O TOPO.
