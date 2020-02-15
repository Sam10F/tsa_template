<?php
include_once("BaseModel.php");
class TestModel extends BaseModel
{
    public function getName()
    {
        return 'Samuel';
    }

    public function getSurName()
    {
        return 'Diez';
    }
}