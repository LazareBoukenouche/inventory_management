<?php 

namespace App\Http\Service;

class Order
{
    /**
     * @var int
     */
    protected id; 

    /**
     * @var string
     */
    protected supplier;

    /**
     * @var string
     */
    protected date_creation;

    /**
     * @var string
     */
    protected status;

    /**
     * @var string
     */
    protected date_reception;

    /**
     * @var string
     */
    protected user;

    /**
     * @var array
     */
    protected order_lines = [];

    /**
     * Add an order line to the order.
     *
     * @return void
     */
    public function addLine()
    {}

    /**
     * Remove an order line to the order.
     *
     * @return void
     */
    public function removeLine()
    {}

    /**
     * Modify the date.
     *
     * @return void
     */
    public function modifyDate()
    {}

    /**
     * Register the created Order in the database
     *
     * @return void
     */
    public function save()
    {}

    /**
     * Indicate that the recepted order has all the expected values
     *
     * @return void
     */
    public function SetOrderAsReception()
    {}

    /**
     * Update the order status to validated
     *
     * @return void
     */
    public function validateReception()
    {}

    /**
     * Send the created order to the chosen supplier
     *
     * @return void
     */
    public function send()
    {}

    /**
     * Cancel a sended order
     *
     * @return void
     */
    public function cancelSended()
    {}
}

?>
