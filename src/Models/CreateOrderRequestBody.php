<?php
/**
 * CreateOrderRequestBody
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * CreateOrderRequestBody
 */
class CreateOrderRequestBody {

    /** @var int $customers_customer_id */
    public int $customers_customer_id;
    /** @var int $carrier_id */
    public int $carrier_id;
    /** @var string $order_no */
    public string $order_no;
    /** @var string $order_date */
    public string $order_date;
    /** @var array $positions */
    public array $positions;
    /** @var CreateOrderRequestBodyInvoice $invoice */
    public CreateOrderRequestBodyInvoice $invoice;
    /** @var CreateOrderRequestBodyInvoiceAddress $invoiceAddress */
    public CreateOrderRequestBodyInvoiceAddress $invoiceAddress;
    /** @var CreateOrderRequestBodyDeliveryAddress $deliveryAddress */
    public CreateOrderRequestBodyDeliveryAddress $deliveryAddress;

    /**
     *
     * constructor to unserialize array to model-properties
     *
     * @param array|null $array dataset array
     */
    public function __construct(?array $array = null) {

        if($array !== null) {
            foreach($array as $key => $value) {
                if(!property_exists(self::class, $key)) {
                    throw new \Exception('Try to assign nonexisting property \''.$key.'\'.');
                }
                $this->$key = $value;
            }
        }
    }
}


