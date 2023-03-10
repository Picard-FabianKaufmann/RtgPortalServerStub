# Documentation for RTG-Portal


<a name="documentation-for-api-endpoints"></a>

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InfrastructuralApi* | [**checkConnection**](Apis/InfrastructuralApi.md#checkconnection) | **GET** /api/shop/v2/testconnection/{stockListToken} | Testing connection of shop to RTG-Portal and setting shopstatus to active
*InfrastructuralApi* | [**getCarriers**](Apis/InfrastructuralApi.md#getcarriers) | **GET** /api/shop/v2/carriers | Get carriers
*InfrastructuralApi* | [**getLanguages**](Apis/InfrastructuralApi.md#getlanguages) | **GET** /api/shop/v2/languages | Get all supported languages, that has been assigned in the rtg-portal
*InfrastructuralApi* | [**getOrderStatuscodes**](Apis/InfrastructuralApi.md#getorderstatuscodes) | **GET** /api/shop/v2/order/statuscodes | Get order-statuscodes
*InfrastructuralApi* | [**getProductCategories**](Apis/InfrastructuralApi.md#getproductcategories) | **GET** /api/shop/v2/product/categories/{stockListToken} | Get all product-categories, that has been assigned in the rtg-portal
*InfrastructuralApi* | [**getProductManufacturers**](Apis/InfrastructuralApi.md#getproductmanufacturers) | **GET** /api/shop/v2/product/manufacturers/{stockListToken} | Get all product-manufacturers, that has been assigned in the rtg-portal
*InfrastructuralApi* | [**updateRequestStatus**](Apis/InfrastructuralApi.md#updaterequeststatus) | **PUT** /api/shop/v2/report_request_status | reporting request status, if failed or succeed
*OrdersApi* | [**createOrder**](Apis/OrdersApi.md#createorder) | **POST** /api/shop/v2/order | Set new order
*OrdersApi* | [**getOrder**](Apis/OrdersApi.md#getorder) | **GET** /api/shop/v2/order/{order_id} | Get specific orderdata
*OrdersApi* | [**getOrderStatus**](Apis/OrdersApi.md#getorderstatus) | **GET** /api/shop/v2/order/{order_id}/status | get orderstatus of specific order
*OrdersApi* | [**getOrders**](Apis/OrdersApi.md#getorders) | **GET** /api/shop/v2/orders | Get all orders
*OrdersApi* | [**updateOrderStatus**](Apis/OrdersApi.md#updateorderstatus) | **PUT** /api/shop/v2/order/{order_id}/status | Set new orderstatus
*ProductsApi* | [**getImage**](Apis/ProductsApi.md#getimage) | **GET** /api/shop/v2/products/image/{imagename} | Get product images by filename
*ProductsApi* | [**getImages**](Apis/ProductsApi.md#getimages) | **GET** /api/shop/v2/products/images/{stockListToken} | Get product images by filename
*ProductsApi* | [**getLineartechProducts**](Apis/ProductsApi.md#getlineartechproducts) | **GET** /api/shop/v2/products/lineartech/{stockListToken} | Provides all lineartechproductdetails
*ProductsApi* | [**getLineartechQuantities**](Apis/ProductsApi.md#getlineartechquantities) | **GET** /api/shop/v2/products/lineartech/quantities/{stockListToken} | Provides all lineartechquantities
*ProductsApi* | [**getPrices**](Apis/ProductsApi.md#getprices) | **GET** /api/shop/v2/products/prices/{stockListToken} | Provides all productprices
*ProductsApi* | [**getProductAttributeKeys**](Apis/ProductsApi.md#getproductattributekeys) | **GET** /api/shop/v2/products/attribute_keys/{stockListToken} | Provides all product attribute keys
*ProductsApi* | [**getProductAttributeValues**](Apis/ProductsApi.md#getproductattributevalues) | **GET** /api/shop/v2/products/attribute_values/{stockListToken} | Provides all product attribute values
*ProductsApi* | [**getProducts**](Apis/ProductsApi.md#getproducts) | **GET** /api/shop/v2/products/{stockListToken} | Get Products with full dataset
*ProductsApi* | [**getQuantities**](Apis/ProductsApi.md#getquantities) | **GET** /api/shop/v2/products/quantities/{stockListToken} | Provides all productquantities


<a name="documentation-for-models"></a>

## Documentation for Models

 - [/Models.Address](Models/Address.md)
 - [/Models.Carrier](Models/Carrier.md)
 - [/Models.Category](Models/Category.md)
 - [/Models.CategoryCategoryLangInner](Models/CategoryCategoryLangInner.md)
 - [/Models.CategorySubCategoriesInner](Models/CategorySubCategoriesInner.md)
 - [/Models.CategorySubCategoriesInnerCategoryLangInner](Models/CategorySubCategoriesInnerCategoryLangInner.md)
 - [/Models.CategorySubCategoriesInnerSubCategoriesInner](Models/CategorySubCategoriesInnerSubCategoriesInner.md)
 - [/Models.CategorySubCategoriesInnerSubCategoriesInnerCategoryLangInner](Models/CategorySubCategoriesInnerSubCategoriesInnerCategoryLangInner.md)
 - [/Models.CreateOrderRequestBody](Models/CreateOrderRequestBody.md)
 - [/Models.CreateOrderRequestBodyDeliveryAddress](Models/CreateOrderRequestBodyDeliveryAddress.md)
 - [/Models.CreateOrderRequestBodyInvoice](Models/CreateOrderRequestBodyInvoice.md)
 - [/Models.CreateOrderRequestBodyInvoiceAddress](Models/CreateOrderRequestBodyInvoiceAddress.md)
 - [/Models.DataTokenInvalidErrorResponse](Models/DataTokenInvalidErrorResponse.md)
 - [/Models.DefaultFilterRequestBody](Models/DefaultFilterRequestBody.md)
 - [/Models.DefaultProductFilterRequestBody](Models/DefaultProductFilterRequestBody.md)
 - [/Models.Language](Models/Language.md)
 - [/Models.Manufacturer](Models/Manufacturer.md)
 - [/Models.MissingAddressErrorResponse](Models/MissingAddressErrorResponse.md)
 - [/Models.Order](Models/Order.md)
 - [/Models.OrderCreatedResponse](Models/OrderCreatedResponse.md)
 - [/Models.OrderDetailDeliveryAddress](Models/OrderDetailDeliveryAddress.md)
 - [/Models.OrderDetailInvoice](Models/OrderDetailInvoice.md)
 - [/Models.OrderDetailInvoiceAddress](Models/OrderDetailInvoiceAddress.md)
 - [/Models.OrderDetailInvoiceSchema](Models/OrderDetailInvoiceSchema.md)
 - [/Models.OrderDetailPosition](Models/OrderDetailPosition.md)
 - [/Models.OrderDetailStatusHistoryEntry](Models/OrderDetailStatusHistoryEntry.md)
 - [/Models.OrderStatusHistory](Models/OrderStatusHistory.md)
 - [/Models.OrderStatuscode](Models/OrderStatuscode.md)
 - [/Models.ProductAttribute](Models/ProductAttribute.md)
 - [/Models.ProductAttributeKey](Models/ProductAttributeKey.md)
 - [/Models.ProductAttributeValue](Models/ProductAttributeValue.md)
 - [/Models.ProductData](Models/ProductData.md)
 - [/Models.ProductDataBuildProducts](Models/ProductDataBuildProducts.md)
 - [/Models.ProductDataImage](Models/ProductDataImage.md)
 - [/Models.ProductDataLineartech](Models/ProductDataLineartech.md)
 - [/Models.ProductDataPrice](Models/ProductDataPrice.md)
 - [/Models.ProductDataQuantity](Models/ProductDataQuantity.md)
 - [/Models.ProductDataRelatedProducts](Models/ProductDataRelatedProducts.md)
 - [/Models.ProductDataSetProducts](Models/ProductDataSetProducts.md)
 - [/Models.ProductImage](Models/ProductImage.md)
 - [/Models.ProductImageFileNotFoundErrorResponse](Models/ProductImageFileNotFoundErrorResponse.md)
 - [/Models.ProductImages](Models/ProductImages.md)
 - [/Models.ProductLineartechDetail](Models/ProductLineartechDetail.md)
 - [/Models.ProductLineartechQuantities](Models/ProductLineartechQuantities.md)
 - [/Models.ProductNotFoundErrorResponse](Models/ProductNotFoundErrorResponse.md)
 - [/Models.ProductPrice](Models/ProductPrice.md)
 - [/Models.ProductQuantity](Models/ProductQuantity.md)
 - [/Models.ProductsRequestBody](Models/ProductsRequestBody.md)
 - [/Models.ReportRequestStatusResponse](Models/ReportRequestStatusResponse.md)
 - [/Models.RequestBodyValidationErrorResponse](Models/RequestBodyValidationErrorResponse.md)
 - [/Models.RequestBodyValidationErrorResponseDynamicKeys](Models/RequestBodyValidationErrorResponseDynamicKeys.md)
 - [/Models.ShoptokenInvalidErrorResponse](Models/ShoptokenInvalidErrorResponse.md)
 - [/Models.ShoptokenPermissionErrorResponse](Models/ShoptokenPermissionErrorResponse.md)
 - [/Models.SuccessResponse](Models/SuccessResponse.md)
 - [/Models.SuccessResponseData](Models/SuccessResponseData.md)
 - [/Models.SuccessResponseMeta](Models/SuccessResponseMeta.md)
 - [/Models.SuccessResponseMetaSchema](Models/SuccessResponseMetaSchema.md)
 - [/Models.TestConnectionResponse](Models/TestConnectionResponse.md)
 - [/Models.UpdateOrderStatusResponse](Models/UpdateOrderStatusResponse.md)


<a name="documentation-for-authorization"></a>

## Documentation for Authorization


<a name="Shoptoken"></a>

### Shoptoken

- **Type**: HTTP basic authentication
