<?php

declare(strict_types=1);

namespace App\Proxy;

class RealSubject implements SubjectInterface
{

    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}