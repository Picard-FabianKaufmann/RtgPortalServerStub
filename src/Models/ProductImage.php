<?php
/**
 * ProductImage
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductImage
 */
class ProductImage {

    /** @var string $frontImage */
    public string $frontImage;
    /** @var string $backImage */
    public string $backImage;
    /** @var string $allroundImage */
    public string $allroundImage;
    /** @var string $sketchImage */
    public string $sketchImage;
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


