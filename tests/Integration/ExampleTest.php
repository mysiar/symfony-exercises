<?php
declare(strict_types=1);

namespace App\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExampleTest extends KernelTestCase
{
    public function test(): void
    {
        self::bootKernel();

        $this->assertInstanceOf(ContainerInterface::class, self::$kernel->getContainer());
    }
}
