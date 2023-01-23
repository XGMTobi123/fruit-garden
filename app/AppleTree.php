<?php
class AppleTree extends Tree
{
    const TYPE = 1;
    const MIN_FRUITS=40;
    const MAX_FRUITS=50;
    const NAME = "Apples";
    public function __construct()
    {
        parent::__construct();
        $this->type=self::TYPE;
        $this->fruitCount=rand(self::MIN_FRUITS,self::MAX_FRUITS);
        $this->name=self::NAME;
    }

}