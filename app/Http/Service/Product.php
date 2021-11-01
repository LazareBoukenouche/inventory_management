<?php 

namespace App\Http\Service;

class Product
{
    /**
     * @var int
     */
    protected id; 

    /**
     * @var string
     */
    protected name;

    /**
     * @var float
     */
    protected price;

    /**
     * @var string
     */
    protected supplier;

    /**
     * Register the created Product in the database
     *
     * @return void
     */
    public function save()
    {}
}

?>
