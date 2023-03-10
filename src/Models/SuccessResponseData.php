<?php
/**
 * SuccessResponseData
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * SuccessResponseData
 */
class SuccessResponseData {

    /** @var int $id */
    public int $id;
    /** @var string $shortISO */
    public string $shortISO;
    /** @var string $languageName */
    public string $languageName;
    /** @var bool $isPublished */
    public bool $isPublished;
    /** @var string $created_at */
    public string $created_at;
    /** @var string|null $updated_at */
    public ?string $updated_at;
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
    /** @var string $shortName */
    public string $shortName;
    /** @var string $fullName */
    public string $fullName;
    /** @var string|null $deleted_at */
    public ?string $deleted_at;
    /** @var string $shippingCode */
    public string $shippingCode;
    /** @var string $shippingCompanyCode */
    public string $shippingCompanyCode;
    /** @var string $shippingCompany */
    public string $shippingCompany;
    /** @var string $shippingName */
    public string $shippingName;
    /** @var string $shippingTime */
    public string $shippingTime;
    /** @var string $shippingTimeFriday */
    public string $shippingTimeFriday;
    /** @var float $shippingWeight */
    public float $shippingWeight;
    /** @var int $shippingLength */
    public int $shippingLength;
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
    /** @var int $width */
    public int $width;
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
    /** @var int $quantity */
    public int $quantity;
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
    /** @var float $productPrice */
    public float $productPrice;
    /** @var float $listPrice */
    public float $listPrice;
    /** @var float $fictiveListPrice */
    public float $fictiveListPrice;
    /** @var float $occasionPrice */
    public float $occasionPrice;
    /** @var float $selectionPrice */
    public float $selectionPrice;
    /** @var float $lastYearPrice */
    public float $lastYearPrice;
    /** @var string $currency */
    public string $currency;
    /** @var string $filename */
    public string $filename;
    /** @var string $base64 */
    public string $base64;
    /** @var int $lengthOriginal */
    public int $lengthOriginal;
    /** @var int $lengthInStock */
    public int $lengthInStock;
    /** @var int $lengthLeft */
    public int $lengthLeft;
    /** @var int $lengthRight */
    public int $lengthRight;
    /** @var int $key_id */
    public int $key_id;
    /** @var string $key */
    public string $key;
    /** @var int $value_id */
    public int $value_id;
    /** @var string $value */
    public string $value;
    /** @var int $customers_customer_id */
    public int $customers_customer_id;
    /** @var int $carrier_id */
    public int $carrier_id;
    /** @var string $orderNo */
    public string $orderNo;
    /** @var int $current_status_id */
    public int $current_status_id;
    /** @var bool $isPDFDelivered */
    public bool $isPDFDelivered;
    /** @var string $paymentMethod */
    public string $paymentMethod;
    /** @var float $totalShippingCosts */
    public float $totalShippingCosts;
    /** @var float $totalPaid */
    public float $totalPaid;
    /** @var string $comment */
    public string $comment;
    /** @var string $deliveryNote */
    public string $deliveryNote;
    /** @var string $reference */
    public string $reference;
    /** @var string $discountName */
    public string $discountName;
    /** @var string $discountCode */
    public string $discountCode;
    /** @var float $discountValue */
    public float $discountValue;
    /** @var string|null $sentToDatahub */
    public ?string $sentToDatahub;
    /** @var array $positions */
    public array $positions;
    /** @var OrderDetailInvoice $invoice */
    public OrderDetailInvoice $invoice;
    /** @var OrderDetailInvoiceAddress $invoiceAddress */
    public OrderDetailInvoiceAddress $invoiceAddress;
    /** @var OrderDetailDeliveryAddress $deliveryAddress */
    public OrderDetailDeliveryAddress $deliveryAddress;
    /** @var array $status_histories */
    public array $status_histories;
    /** @var int $order_id */
    public int $order_id;
    /** @var int $order_statuscode_id */
    public int $order_statuscode_id;

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


