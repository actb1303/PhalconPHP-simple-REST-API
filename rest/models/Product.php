<?php

class Product extends \Phalcon\Mvc\Model
{

var_dump(0);
    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $price;

    /**
     *
     * @var string
     */
    public $description;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'price' => 'price', 
            'description' => 'description'
        );
    }

}
