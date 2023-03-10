<?php
/**
 * OrderDetailPosition
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * OrderDetailPosition
 */
class OrderDetailPosition {

    /** @var int $product_id */
    public int $product_id;
    /** @var string $productName */
    public string $productName;
    /** @var int $quantity */
    public int $quantity;
    /** @var float $price */
    public float $price;
    /** @var float $linearLength */
    public float $linearLength;
    /** @var bool $linearSymmetrical */
    public bool $linearSymmetrical;
    /** @var float $linearDistanceFirstBore */
    public float $linearDistanceFirstBore;
    /** @var string $lineReferenceText */
    public string $lineReferenceText;
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


