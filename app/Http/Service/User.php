<?php 

namespace App\Http\Service;

class User
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
     * @var string
     */
    protected email;

    /**
     * @var string
     */
    protected role;

    /**
     * Register the created User in the database
     *
     * @return void
     */
    public function save()
    {}
}

?>
