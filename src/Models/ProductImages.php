<?php
/**
 * ProductImages
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductImages
 */
class ProductImages {

    /** @var string $filename */
    public string $filename;
    /** @var string $base64 */
    public string $base64;

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


