<?php
/**
 * CategorySubCategoriesInner
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * CategorySubCategoriesInner
 */
class CategorySubCategoriesInner {

    /** @var int $id */
    public int $id;
    /** @var int|null $parent_product_category_id */
    public ?int $parent_product_category_id;
    /** @var int $layer */
    public int $layer;
    /** @var int $amount_products */
    public int $amount_products;
    /** @var array $categoryLang */
    public array $categoryLang;
    /** @var array $subCategories */
    public array $subCategories;
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


