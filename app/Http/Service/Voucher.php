<?php 

namespace App\Http\Service;

class Voucher
{
    /**
     * @var int
     */
    protected id; 

    /**
     * @var string
     */
    protected date_creation;

    /**
     * @var string
     */
    protected user;

    /**
     * @var array
     */
    protected voucher_lines = [];

    /**
     * Add an voucher line to the voucher.
     *
     * @return void
     */
    public function addLine()
    {}

    /**
     * Remove an voucher line to the voucher.
     *
     * @return void
     */
    public function removeLine()
    {}

    /**
     * Register the created Voucher in the database
     *
     * @return void
     */
    public function save()
    {}

    /**
     * Modify the quantity of the product in a line
     *
     * @return void
     */
    public function updateLineQuantity()
    {}
}

?>
