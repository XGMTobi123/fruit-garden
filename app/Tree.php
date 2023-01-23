<?php
class Tree
{
    public int $id;
    public int $type;
    public int $fruitCount;
    public string $name;
    const TREES_TYPES = 2;
    public function __construct()
    {
        $this->id=spl_object_id($this);
    }
}