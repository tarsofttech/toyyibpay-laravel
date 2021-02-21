## ToyyibPay Access Credentials

For complete API usage, some endpoints need `User Secret Key`. For staging/testing purposes, please register an account at [ToyyibPay Staging Portal](https://dev.toyyibpay.com). Here you can create dummy bills and make test payments via Bank Simulators.

***Notification! We will not accept responsibility for loss of money due to improper use of the toyyibPay API and this package.***

## Installation

To install the package within your laravel project use the following composer command:

```
composer require tarsoft/toyyibpay
```


## Publish ToyyibPay Config File

```
php artisan vendor:publish --provider="Tarsoft\Toyyibpay\ToyyibpayServiceProvider"
```

## Environment Credential Setup

```
TOYYIBPAY_USER_SECRET_KEY=ADD-TOYYIBPAY_USER_SECRET_KEY
TOYYIBPAY_REDIRECT_URI=ADD-TOYYIBPAY_REDIRECT_URI
TOYYIBPAY_SANDBOX=ADD-TOYYIBPAY_SANDBOX-MODE
```


## Auto Discovery

If you're using Laravel 5.5+ you don't need to manually add the service provider or facade. This will be Auto-Discovered. For all versions of Laravel below 5.5, you must manually add the ServiceProvider & Facade to the appropriate arrays within your Laravel project `config/app.php`


#### Provider

```php
Tarsoft\Toyyibpay\ToyyibpayServiceProvider::class,
```

#### Alias / Facade

```php
'Toyyibpay' => Tarsoft\Toyyibpay\ToyyibpayFacade::class,
```

## Usage

#### Use Toyyibpay Facade

```php
use Toyyibpay;

class MyController extends Controller
{
  // Controller functions here...
}
```

