<?php
class Garden
{

    static function GetFruitsFromTree(Tree $tree)
    {
        $fruit["count"]=$tree->fruitCount;
        $fruit["name"]=$tree->name;
        $tree->fruitCount=0;
        return $fruit;
    }

    static function CountAllFruitsFromTrees(array $trees)
    {
        $fruits = array();
        foreach ($trees as $tree)
        {
            $fruits[]=self::GetFruitsFromTree($tree);
        }
        $result=array();
        foreach ($fruits as $fruit)
        {
            if (isset($result[$fruit["name"]])){
                $result[$fruit["name"]]+=$fruit["count"];
            }else{
                $result[$fruit["name"]]=$fruit["count"];
            }
        }
        return $result;
    }

    static function GardenInit()
    {
        $trees=array();
        for ($i=1;$i<=10;$i++)
        {
            $trees[$i]=new AppleTree();
        }
        for ($i=11;$i<=25;$i++)
        {
            $trees[$i]=new PearTree();
        }
        return $trees;
    }

}