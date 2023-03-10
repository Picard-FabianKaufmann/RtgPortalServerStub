<?php
/**
 * Order
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * Order
 */
class Order {

    /** @var int $id */
    public int $id;
    /** @var int $customers_customer_id */
    public int $customers_customer_id;
    /** @var int $carrier_id */
    public int $carrier_id;
    /** @var string $orderNo */
    public string $orderNo;
    /** @var int $current_status_id */
    public int $current_status_id;
    /** @var bool $isPDFDelivered */
    public bool $isPDFDelivered;
    /** @var string $paymentMethod */
    public string $paymentMethod;
    /** @var float $totalShippingCosts */
    public float $totalShippingCosts;
    /** @var float $totalPaid */
    public float $totalPaid;
    /** @var string $comment */
    public string $comment;
    /** @var string $deliveryNote */
    public string $deliveryNote;
    /** @var string $reference */
    public string $reference;
    /** @var string $discountName */
    public string $discountName;
    /** @var string $discountCode */
    public string $discountCode;
    /** @var float $discountValue */
    public float $discountValue;
    /** @var string|null $sentToDatahub */
    public ?string $sentToDatahub;
    /** @var array $positions */
    public array $positions;
    /** @var OrderDetailInvoice $invoice */
    public OrderDetailInvoice $invoice;
    /** @var OrderDetailInvoiceAddress $invoiceAddress */
    public OrderDetailInvoiceAddress $invoiceAddress;
    /** @var OrderDetailDeliveryAddress $deliveryAddress */
    public OrderDetailDeliveryAddress $deliveryAddress;
    /** @var array $status_histories */
    public array $status_histories;
    /** @var string $created_at */
    public string $created_at;
    /** @var string|null $updated_at */
    public ?string $updated_at;
    /** @var string|null $deleted_at */
    public ?string $deleted_at;

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


