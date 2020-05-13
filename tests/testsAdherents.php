<?php
#!/usr/bin/env php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class testsAdherents extends TestCase
{
    public function testAdherents(): void
    {
        $this->assertInstanceOf(
            Adherents::class,
            new Adherents("Bonniot","Thomas","07/08/1999")
        );
    }
}
