<?php

namespace CursoPOO\Cliente;

class Cliente
{
    public $id;
    public $nome;
    public $cpf_cnpj;
    public $endereco;
    public $telefone;
    public $email;

    public static function getClientes()
    {
        $clientes = array();
        for ($i = 1; $i <= 10; $i++) {
            $cliente = new Cliente();

            $cliente->id = $i;
            $cliente->nome = "Cliente ".$i;
            $cliente->cpf_cnpj = str_repeat($i < 10 ? $i : 0,3).".".str_repeat($i < 10 ? $i : 0,3)."."
                .str_repeat($i < 10 ? $i : 0,3)."-".str_repeat($i < 10 ? $i : 0,2);
            $cliente->endereco = "Endereço ".$i;
            $cliente->telefone = str_repeat($i < 10 ? $i : 0,4)."-".str_repeat($i < 10 ? $i : 0,4);
            $cliente->email = "cliente".$i."@cursopoo.com.br";

            $clientes[$i] = $cliente;
        }

        return $clientes;
    }

    public static function getCliente($id)
    {
        $clientes = self::getClientes();

        return $clientes[$id];
    }

}