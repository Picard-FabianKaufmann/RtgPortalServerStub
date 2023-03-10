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


namespace PicardFabianKaufmann\RtgServerStub;

use Illuminate\Support\ServiceProvider;

class OpenapiServerStubServiceProvider extends ServiceProvider
{
    /**
     * Register
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // php artisan vendor:publish --provider="PicardFabianKaufmann\RtgServerStub\OpenapiServerStubServiceProvider" --tag="server-stub-routes"
        $this->publishes([
            __DIR__.'/../routes/api.php' => base_path('routes/openapiRoutes.php')
        ], 'server-stub-routes');
    }
}