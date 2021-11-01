<?php 

namespace App\Http\Service;

class Sales
{
    /**
     * @var int
     */
    protected id; 

    /**
     * @var string
     */
    protected status;

    /**
     * @var array
     */
    protected sales_lines = [];

    /**
     * @var string
     */
    protected user;

    /**
     * @var string
     */
    protected date_creation;

    /**
     * @var string
     */
    protected date_validation;

    /**
     * Calculate the total price of the sale.
     *
     * @return void
     */
    public function calculateTotalPrice()
    {} 
    
    /**
     * Update the sale status to validated
     *
     * @return void
     */
    public function validate()
    {}
}

?>
