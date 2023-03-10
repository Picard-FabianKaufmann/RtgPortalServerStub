<?php

/**
 * RTG-Portal
 * The RTG-Portal API is an interface for selected RTG-Shop customers.
 *
 * Laravel version 9.48.x
 * PHP version 8.2.x
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: fabian.kaufmann@picard.de
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel-9/
 */


namespace PicardFabianKaufmann\RtgServerStub\Apis;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;


class OrdersApi extends Controller
{
    /**
     * Operation createOrder
     *
     * createOrder.
     * [OrderCreatedResponse, CreateOrderRequestBody, ShoptokenInvalidErrorResponse, RequestBodyValidationErrorResponse, MissingAddressErrorResponse]
     *
     * @return PicardFabianKaufmann\RtgServerStub\Models\OrderCreatedResponse|PicardFabianKaufmann\RtgServerStub\Models\CreateOrderRequestBody|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\RequestBodyValidationErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\MissingAddressErrorResponse
     */
    public function createOrder(): PicardFabianKaufmann\RtgServerStub\Models\OrderCreatedResponse|PicardFabianKaufmann\RtgServerStub\Models\CreateOrderRequestBody|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\RequestBodyValidationErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\MissingAddressErrorResponse
    {
        $validatedInputs = Request::validator([
            'createOrderRequestBody' => [
                    // DANN HIER DAS MODEL VERSUCHEN ANZUGEGBEN ... NUR WIE???
                'CreateOrderRequestBody',
            ],
        ]);



        return response('How about implementing createOrder as a POST method ?');
    }
    /**
     * Operation getOrder
     *
     * getOrder.
     * [SuccessResponse, ShoptokenInvalidErrorResponse, integer]
     *
     * @param int $orderId Check for specific order_id (required)
     * @return PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
     */
    public function getOrder(int $orderId): PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
    {
        $validatedInputs = Request::validator([
            'orderId' => [
                'int', 'required',
            ],
        ]);



        return response('How about implementing getOrder as a GET method ?');
    }
    /**
     * Operation getOrderStatus
     *
     * getOrderStatus.
     * [SuccessResponse, ShoptokenInvalidErrorResponse, integer]
     *
     * @param int $orderId Check for specific order_id (required)
     * @return PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
     */
    public function getOrderStatus(int $orderId): PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
    {
        $validatedInputs = Request::validator([
            'orderId' => [
                'int', 'required',
            ],
        ]);



        return response('How about implementing getOrderStatus as a GET method ?');
    }
    /**
     * Operation getOrders
     *
     * getOrders.
     * [SuccessResponse, DefaultFilterRequestBody, ShoptokenInvalidErrorResponse]
     *
     * @return PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\DefaultFilterRequestBody|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse
     */
    public function getOrders(): PicardFabianKaufmann\RtgServerStub\Models\SuccessResponse|PicardFabianKaufmann\RtgServerStub\Models\DefaultFilterRequestBody|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse
    {
        $validatedInputs = Request::validator([
            'defaultFilterRequestBody' => [
                    // DANN HIER DAS MODEL VERSUCHEN ANZUGEGBEN ... NUR WIE???
                'DefaultFilterRequestBody',
            ],
        ]);



        return response('How about implementing getOrders as a GET method ?');
    }
    /**
     * Operation updateOrderStatus
     *
     * updateOrderStatus.
     * [UpdateOrderStatusResponse, ShoptokenInvalidErrorResponse, RequestBodyValidationErrorResponse, integer]
     *
     * @param int $orderId OrderID to selecte order to set status for (required)
     * @return PicardFabianKaufmann\RtgServerStub\Models\UpdateOrderStatusResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\RequestBodyValidationErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
     */
    public function updateOrderStatus(int $orderId): PicardFabianKaufmann\RtgServerStub\Models\UpdateOrderStatusResponse|PicardFabianKaufmann\RtgServerStub\Models\ShoptokenInvalidErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\RequestBodyValidationErrorResponse|PicardFabianKaufmann\RtgServerStub\Models\integer
    {
        $validatedInputs = Request::validator([
            'orderId' => [
                'int', 'required',
            ],
            'orderStatusCodeId' => [
                'int', 'required',
            ],
        ]);



        return response('How about implementing updateOrderStatus as a PUT method ?');
    }
}
