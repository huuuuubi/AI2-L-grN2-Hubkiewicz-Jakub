<?php
namespace App\Tests\Entity;
use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['0', 32],
            ['0.5', 32.9],
            ['9.45', 49.01],
            ['11.21', 52.178],
            ['36.6', 97.88],
            ['21.37', 70.466],
            ['-21.37', -6.466],
            ['-36.6', -33.88],
            ['99.1', 210.38],
            ['100', 212],
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();
//        $measurement->setCelsius('0');
//        $this->assertEquals(32, $measurement->getFahrehneit());
//        $measurement->setCelsius('-100');
//        $this->assertEquals(-148, $measurement->getFahrehneit());
//        $measurement->setCelsius('100');
//        $this->assertEquals(212, $measurement->getFahrehneit());
        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrehneit(),
            "Expected $expectedFahrenheit Fahrenheit for $celsius Celsius, got {$measurement->getFahrehneit()}");
    }
}
