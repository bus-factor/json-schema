<?php

declare(strict_types=1);

namespace BusFactor\JsonSchema\Model;

enum Type: string
{
    case ARRAY = 'array';
    case BOOLEAN = 'boolean';
    case INTEGER = 'integer';
    case NULL = 'null';
    case NUMBER = 'number';
    case OBJECT = 'object';
    case STRING = 'string';
}
