<?php
/**
 * ProductAttribute
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductAttribute
 */
class ProductAttribute {

    /** @var array $keys */
    public array $keys;
    /** @var array $values */
    public array $values;
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


