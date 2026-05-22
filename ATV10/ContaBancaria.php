<?php





class ContaBancaria
{

    public int $numero;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor
        } else {
            echo "Deposite um valor válido"
        }
    }

    public function sacar($valor)
    {
        if ($valor > 0) {
            if ($this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor
            } else {
                echo "Saldo insuficiente!"
            }
        } else {
            echo "Saldo insuficiente!"
        }
    }

    public function transferir($valor, $destino)
    {
        if ($valor > 0 && $this->saldo >= $saldo) {
            $this->saldo = $this->saldo - $valor
            $destino->saldo = $destino->saldo + $valor
            $c = true;
        } else {
            echo "Erro"
            $c = false;
        }
        return $c;
    }
    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function fecharConta()
    {
        if ($this->saldo == 0) {
            echo "Conta fechada"
        } else if ($this->saldo > 0) {
            echo "Saque o restante do saldo antes de fechar sua conta"
        } else if ($this->saldo < 0) {
            echo "Quite sua dívida antes de fechar sua conta"
        }
    }




}
