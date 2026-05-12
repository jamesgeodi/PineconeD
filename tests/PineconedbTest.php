<?php
/**
 * Tests for PineconeDB
 */

use PHPUnit\Framework\TestCase;
use Pineconedb\Pineconedb;

class PineconedbTest extends TestCase {
    private Pineconedb $instance;

    protected function setUp(): void {
        $this->instance = new Pineconedb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pineconedb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
