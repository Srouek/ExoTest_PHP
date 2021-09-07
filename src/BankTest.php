<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Banktest extends TestCase
{
    protected $solde = 300;

    public function testEx1(): void
    {
        // creer une fonction qui retourne le solde 
        $regex = Bank::ex1();
        
    }

}