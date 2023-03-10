<?php
/**
 * ProductPrice
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductPrice
 */
class ProductPrice {

    /** @var int $product_id */
    public int $product_id;
    /** @var float $productPrice */
    public float $productPrice;
    /** @var float $listPrice */
    public float $listPrice;
    /** @var float $fictiveListPrice */
    public float $fictiveListPrice;
    /** @var float $occasionPrice */
    public float $occasionPrice;
    /** @var float $selectionPrice */
    public float $selectionPrice;
    /** @var float $lastYearPrice */
    public float $lastYearPrice;
    /** @var string $currency */
    public string $currency;
    /** @var string $created_at */
    public string $created_at;
    /** @var string|null $updated_at */
    public ?string $updated_at;

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


