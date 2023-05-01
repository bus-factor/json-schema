<?php

declare(strict_types=1);

namespace BusFactor\JsonSchemaTest\Model;

use BusFactor\JsonSchema\Model\Schema;
use BusFactor\JsonSchema\Model\Type;
use PHPUnit\Framework\TestCase;

/**
 * @covers \BusFactor\JsonSchema\Model\Schema
 */
class SchemaTest extends TestCase
{
    public function testConstruct(): void
    {
        $type = Type::INTEGER;

        $subject = new Schema($type);

        self::assertSame($type, $subject->type);
    }
}
