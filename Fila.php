<?php
class Fila extends SplStack
{
    public $fila;
    public $limite;

    public function __construct($limite = 10)
    {
        $this->fila = array();

        $this->limite = $limite;
    }

    public function enqueue($senha)
    {
        $count = (($this->fila) ? count($this->fila):0);
        if ($count < $this->limite) {
            array_unshift($this->fila, $senha);
        } else {
            throw new RunTimeException('Não há mais Senhas Disponíveis!');
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('A fila está vazia!');
        } else {
            return array_pop($this->fila);
        }
    }

    public function isEmpty()
    {
        return empty($this->fila);
    }
}

$Fila1 = new Fila();

$Fila1->enqueue(123);
$Fila1->enqueue(126);
$Fila1->enqueue(167);
$Fila1->enqueue(160);
$Fila1->dequeue();




echo "<h1 style='text-align:center'>Senhas na Fila</h1>";
echo '<hr>';
echo "<strong>Senhas Disponíveis: </strong>$Fila1->limite";
echo '<br>';
echo "<strong>Proxima Senha: </strong>". end($Fila1->fila);
echo '<br>';
echo "<strong>Na Fila: </strong>";
echo '<br>';

echo '<br>';
foreach ($Fila1->fila as $senha) {
    echo $senha . '<br>';
}
