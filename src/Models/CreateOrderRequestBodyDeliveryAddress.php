<?php
/**
 * CreateOrderRequestBodyDeliveryAddress
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * CreateOrderRequestBodyDeliveryAddress
 */
class CreateOrderRequestBodyDeliveryAddress {

    /** @var int $flag_is_invoice_address */
    public int $flag_is_invoice_address;
    /** @var string $cooperate_name */
    public string $cooperate_name;
    /** @var string $last_name */
    public string $last_name;
    /** @var string $first_name */
    public string $first_name;
    /** @var string $street */
    public string $street;
    /** @var string|null $additional */
    public ?string $additional;
    /** @var string $postcode */
    public string $postcode;
    /** @var string $city */
    public string $city;
    /** @var string $state */
    public string $state;
    /** @var string $country */
    public string $country;
    /** @var string $contact_phone */
    public string $contact_phone;

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


