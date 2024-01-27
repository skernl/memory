<?php
declare(strict_types=1);

namespace Skernl\Memory;

use Swoole\Table;

/**
 * @method bool set(string $key, array $value)
 * @method int incr(string $key, string $column, mixed $incrBy = 1)
 * @method int decr(string $key, string $column, mixed $incrBy = 1)
 * @method array|false get(string $key, string $field = null)
 * @method bool exist(string $key)
 * @method int count(string $key)
 * @method bool del(string $key)
 * @method array stats(string $key)
 * @Memory
 * @\Skernl\Memory\Memory
 */
class Memory
{
    private Table $table;

    /**
     * @param array $column
     * @param int $size
     */
    public function __construct(private readonly array $column, int $size = 64)
    {
        $this->table = new Table($size);
        array_map(function ($name) {
            $this->table->column($name, );
        }, $this->column);
    }

    /**
     * @return int|null
     */
    public function getSize(): null|int
    {
        return $this->table->size;
    }

    /**
     * @return int|null
     */
    public function getMemorySize(): null|int
    {
        return $this->table->memorySize;
    }
}