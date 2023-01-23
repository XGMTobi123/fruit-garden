<?php
class PearTree extends Tree
{
    const TYPE = 2;
    const MIN_FRUITS=0;
    const MAX_FRUITS=20;
    const NAME = "Pears";
    public function __construct()
    {
        parent::__construct();
        $this->type=self::TYPE;
        $this->fruitCount=rand(self::MIN_FRUITS,self::MAX_FRUITS);
        $this->name=self::NAME;
    }
}