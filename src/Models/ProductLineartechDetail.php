<?php
/**
 * ProductLineartechDetail
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductLineartechDetail
 */
class ProductLineartechDetail {

    /** @var int $product_id */
    public int $product_id;
    /** @var int $type */
    public int $type;
    /** @var int $length */
    public int $length;
    /** @var int $minLengthLeft */
    public int $minLengthLeft;
    /** @var int $maxLengthLeft */
    public int $maxLengthLeft;
    /** @var int $lengthToHole */
    public int $lengthToHole;
    /** @var int $height */
    public int $height;
    /** @var int $width */
    public int $width;
    /** @var float $holeDiameter */
    public float $holeDiameter;
    /** @var int $thread */
    public int $thread;
    /** @var int $numberHoles */
    public int $numberHoles;
    /** @var string $sketch */
    public string $sketch;
    /** @var string $schemaFilter */
    public string $schemaFilter;
    /** @var float $weight */
    public float $weight;
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


