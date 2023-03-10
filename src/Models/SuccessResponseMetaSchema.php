<?php
/**
 * SuccessResponseMetaSchema
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * SuccessResponseMetaSchema
 */
class SuccessResponseMetaSchema {

    /** @var int $total */
    public int $total;
    /** @var int $request_id */
    public int $request_id;

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


