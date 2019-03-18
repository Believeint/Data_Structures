<?php
class Elemento
{
    public $valor;
    public $proximo;
}

class Fila
{
    private $comeco = null;
    private $fim = null;

    public function isEmpty()
    {
        return $this->comeco == null;
    }

    public function enqueue($valor)
    {
        $anterior = $this->fim;
        $this->fim = new Elemento();
        $this->fim->valor = $valor;
        if ($this->isEmpty()) {
            $this->comeco = $this->fim;
        } else {
            $anterior->proximo = $this->fim;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $valorRemovido = $this->comeco->valor;
        $this->comeco = $this->comeco->proximo;
        return $valorRemovido;
    }
}
echo "<h1 style='text-align: center'>Senhas na Fila</h1>";
echo '<hr>';
$fila1 = new Fila();

    $fila1->enqueue("INICIO");
    $fila1->enqueue(1);
    $fila1->enqueue(2);
    $fila1->enqueue(3);
    $fila1->enqueue("FIM");
    while (!$fila1->isEmpty()) {
        echo $fila1->dequeue(). "\n";
    }
