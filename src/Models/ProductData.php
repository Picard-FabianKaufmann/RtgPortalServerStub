<?php
/**
 * ProductData
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductData
 */
class ProductData {

    /** @var int $id */
    public int $id;
    /** @var int $product_category_id */
    public int $product_category_id;
    /** @var int $product_manufacturer_id */
    public int $product_manufacturer_id;
    /** @var string $productName */
    public string $productName;
    /** @var array|null $ean */
    public ?array $ean;
    /** @var array|null $buildProducts */
    public ?array $buildProducts;
    /** @var array|null $relatedProducts */
    public ?array $relatedProducts;
    /** @var array|null $setProducts */
    public ?array $setProducts;
    /** @var float $weight */
    public float $weight;
    /** @var float $width */
    public float $width;
    /** @var float $innerDiameter */
    public float $innerDiameter;
    /** @var float $outerDiameter */
    public float $outerDiameter;
    /** @var string|null $searchText1 */
    public ?string $searchText1;
    /** @var string|null $searchText2 */
    public ?string $searchText2;
    /** @var string|null $searchText3 */
    public ?string $searchText3;
    /** @var int $customsTariffNumber */
    public int $customsTariffNumber;
    /** @var array $attributes */
    public array $attributes;
    /** @var ProductDataPrice $price */
    public ProductDataPrice $price;
    /** @var ProductDataLineartech $lineartech */
    public ProductDataLineartech $lineartech;
    /** @var ProductDataImage $image */
    public ProductDataImage $image;
    /** @var ProductDataQuantity $quantity */
    public ProductDataQuantity $quantity;
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


