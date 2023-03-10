<?php
/**
 * Carrier
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * Carrier
 */
class Carrier {

    /** @var int $id */
    public int $id;
    /** @var string $shippingCode */
    public string $shippingCode;
    /** @var string $shippingCompanyCode */
    public string $shippingCompanyCode;
    /** @var string $shippingCompany */
    public string $shippingCompany;
    /** @var string $shippingName */
    public string $shippingName;
    /** @var string $shippingTime */
    public string $shippingTime;
    /** @var string $shippingTimeFriday */
    public string $shippingTimeFriday;
    /** @var float $shippingWeight */
    public float $shippingWeight;
    /** @var int $shippingLength */
    public int $shippingLength;
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


