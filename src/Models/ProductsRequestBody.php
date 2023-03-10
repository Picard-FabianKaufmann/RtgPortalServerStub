<?php
/**
 * ProductsRequestBody
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * ProductsRequestBody
 */
class ProductsRequestBody {

    /** @var int $limit Limit responsedataamount*/
    public int $limit;
    /** @var int $offset Responsedata offset*/
    public int $offset;
    /** @var int $request_id request_id to identify report request status*/
    public int $request_id;
    /** @var string $forceFullData Force full dataset, otherwise increment*/
    public string $forceFullData;
    /** @var string $dateLimitValue Datefilter value - &#x60;default &#x3D; null &#x3D; timestamp of last successfull import&#x60;*/
    public string $dateLimitValue;
    /** @var string $dateLimitOperator Set AND or OR operator for datefilters*/
    public string $dateLimitOperator;
    /** @var string $dateLimitUpdated Filter updated_at date*/
    public string $dateLimitUpdated;
    /** @var string $dateLimitCreated Filter created_at date*/
    public string $dateLimitCreated;
    /** @var string $dateLimitDeleted Filter deleted_at date*/
    public string $dateLimitDeleted;
    /** @var int $product_id Check for specific product_id*/
    public int $product_id;
    /** @var string $withPrices add pricedata to datasets*/
    public string $withPrices;
    /** @var string $withAttributes add attributes to datasets*/
    public string $withAttributes;
    /** @var string $withLineartech add lineartechdata to datasets*/
    public string $withLineartech;
    /** @var string $withImage add imagenames to datasets*/
    public string $withImage;

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


