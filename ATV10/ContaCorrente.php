<?php





class ContaCorrente extends ContaBancaria

    public float $limiteChequeEspecial;
    public string $cartaoCreditoVencimento;
    public float $taxaManuntencaoMensal;
    public float $valorCartaoCredito;


    public function sacar($valor)
    {
        if ($valor <= $this-> saldo + $this->limiteChequeEspecial) {
                $this->saldo = $this->saldo - $valor
            } else {
                echo "Saldo e Limite insuficientes!"
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
