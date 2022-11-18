<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    public function add(int $a, int $b): int
    {
        return $a + $b;

    }

    public function substract(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b): int
    {
        return ($a / $b);
    }

    /**
     * Definice konstant pro operace.
     */
    const
        ADD = 1,
        SUBTRACT = 2,
        MULTIPLY = 3,
        DIVIDE = 4;

    /**
     * Vrať pole dostupných operací, kde klíč je konstanta operace
     * a hodnota název operace.
     *
     * @return array
     */
    public function getOperations(): array
    {
        return [
            self::ADD => 'Sčítání',
            self::SUBTRACT => 'Odčítání',
            self::MULTIPLY => 'Násobení',
            self::DIVIDE => 'Dělení',
        ];
    }

    /**
     * Zavolej předanou operaci definovanou konstantou a vrať její výsledek.
     * Pokud daná operace neexistuje, vrať null.
     *
     * @param  int $operation
     * @param  int $a
     * @param  int $b
     * @return int|null
     */
    public function calculate(int $operation, int $a, int $b): ?int
    {
        switch ($operation) {
            case self::ADD:
                return $this->add($a, $b);
            case self::SUBTRACT:
                return $this->subtract($a, $b);
            case self::MULTIPLY:
                return $this->multiply($a, $b);
            case self::DIVIDE:
                return $this->divide($a, $b);
            default:
                return null;
        }
    }
}