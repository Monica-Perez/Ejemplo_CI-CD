<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/Prueba.php';

final class PruebaTest extends TestCase {
  public function testPrueba() {
    $this->assertSame("Hola, Monica", saludo("Monica"));
  }
}