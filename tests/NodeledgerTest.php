<?php
/**
 * Tests for NodeLedger
 */

use PHPUnit\Framework\TestCase;
use Nodeledger\Nodeledger;

class NodeledgerTest extends TestCase {
    private Nodeledger $instance;

    protected function setUp(): void {
        $this->instance = new Nodeledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
