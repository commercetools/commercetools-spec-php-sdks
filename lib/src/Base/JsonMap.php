<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

use Commercetools\Types\ModelClassMap;

class JsonMap implements Map, MapperAware, \JsonSerializable
{
    private $rawData;
    private $keys;
    private $indexes = [];
    private $iterator;
    private $resultMapper;

    /**
     * @param array $data
     */
    public function __construct(array $data = null)
    {
        if (is_array($data)) {
            $this->keys = array_keys($data);
            $this->index($data);
        }
        $this->rawData = $data;
        $this->iterator = $this->getIterator();
    }

    /**
     * @param Mapper $mapper
     */
    public function setMapper(Mapper $mapper)
    {
        $this->resultMapper = $mapper;
    }

    /**
     * @returns Mapper
     */
    public function getMapper(): Mapper
    {
        if (is_null($this->resultMapper)) {
            $this->resultMapper = new ResultMapper(new ModelClassMap());
        }
        return $this->resultMapper;
    }

    /**
     * @param string $class
     * @param mixed $data
     * @return string
     */
    protected function resolveDiscriminator(string $class, $data): string
    {
        return $this->getMapper()->resolveDiscriminator($class, $class::DISCRIMINATOR, $class::SUB_TYPES, $data);
    }

    /**
     * @param string $class
     * @param mixed $data
     * @return mixed
     */
    protected function mapData(string $class, $data)
    {
        return $this->getMapper()->mapData($class, $data);
    }

    public function jsonSerialize()
    {
        return $this->rawData;
    }

    public function isPresent(): bool
    {
        return !is_null($this->rawData);
    }

    /**
     * @inheritdoc
     */
    public static function fromArray(array $data)
    {
        return new static($data);
    }

    protected function index($data)
    {
    }

    final protected function raw($index)
    {
        if (isset($this->rawData[$index])) {
            return $this->rawData[$index];
        }
        return null;
    }

    final protected function rawSet($data, $index)
    {
        if (is_null($index)) {
            $this->rawData[] = $data;
        } else {
            $this->rawData[$index] = $data;
        }
    }

    /**
     * @param $key
     * @param $value
     * @return Map
     */
    public function set($key, $value) {
        $this->rawSet($value, $key);
        $this->iterator = $this->getIterator();

        return $this;
    }

    public function get($key)
    {
        return $this->map($this->raw($key), $key);
    }

    public function map($data, $index)
    {
        return $data;
    }

    final protected function addToIndex($index, $key, $value)
    {
        $this->indexes[$index][$key] = $value;
    }

    final protected function valueByKey($index, $key)
    {
        return isset($this->indexes[$index][$key]) ? $this->get($this->indexes[$index][$key]) : null;
    }

    /**
     * @return MapIterator
     */
    public function getIterator(): MapIterator
    {
        $data = !is_null($this->rawData) ? $this->rawData : [];
        return new MapIterator($data, [$this, 'map']);
    }
}