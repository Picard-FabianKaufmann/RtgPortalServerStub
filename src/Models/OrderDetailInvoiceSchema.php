<?php
/**
 * OrderDetailInvoiceSchema
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * OrderDetailInvoiceSchema
 */
class OrderDetailInvoiceSchema {

    /** @var string $invoice_no */
    public string $invoice_no;
    /** @var string $invoiceDate */
    public string $invoiceDate;
    /** @var string $deliveryDate */
    public string $deliveryDate;
    /** @var string $currency */
    public string $currency;
    /** @var string $language */
    public string $language;
    /** @var string $vatNo */
    public string $vatNo;
    /** @var bool $isPDFDelivered */
    public bool $isPDFDelivered;
    /** @var bool $isPaid */
    public bool $isPaid;
    /** @var string $paymentMethod */
    public string $paymentMethod;

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


