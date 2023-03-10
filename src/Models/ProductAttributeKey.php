<?php
/**
 * ProductAttributeKey
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductAttributeKey
 */
class ProductAttributeKey {

    /** @var int $product_id */
    public int $product_id;
    /** @var int $key_id */
    public int $key_id;
    /** @var int $language_id */
    public int $language_id;
    /** @var string $key */
    public string $key;
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


