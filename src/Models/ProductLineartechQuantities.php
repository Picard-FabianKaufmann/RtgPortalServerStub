<?php
/**
 * ProductLineartechQuantities
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductLineartechQuantities
 */
class ProductLineartechQuantities {

    /** @var int $product_id */
    public int $product_id;
    /** @var int $lengthOriginal */
    public int $lengthOriginal;
    /** @var int $lengthInStock */
    public int $lengthInStock;
    /** @var int $lengthLeft */
    public int $lengthLeft;
    /** @var int $lengthRight */
    public int $lengthRight;
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


