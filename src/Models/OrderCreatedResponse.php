<?php
/**
 * OrderCreatedResponse
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * OrderCreatedResponse
 */
class OrderCreatedResponse {

    /** @var int $order_id */
    public int $order_id;

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


