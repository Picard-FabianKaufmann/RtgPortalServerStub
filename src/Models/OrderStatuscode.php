<?php
/**
 * OrderStatuscode
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * OrderStatuscode
 */
class OrderStatuscode {

    /** @var int $id */
    public int $id;
    /** @var int $language_id */
    public int $language_id;
    /** @var string $text */
    public string $text;
    /** @var string $icon */
    public string $icon;
    /** @var bool $isPositive */
    public bool $isPositive;
    /** @var bool $isShipping */
    public bool $isShipping;
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


