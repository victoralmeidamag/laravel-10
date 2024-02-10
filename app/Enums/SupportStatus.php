<?php

namespace App\Enums;

enum SupportStatus: string
{
    case a = "ATIVO";
    case p = "PENDENTE";
    case c = "CANCELADO";

    public static function fromValue(string $name): string
    {
        foreach(self::cases() as $status){
            if($name === $status->name){
                return $status->value;
            }
        }
        throw new \ValueError("$status não está válido");
    }
}