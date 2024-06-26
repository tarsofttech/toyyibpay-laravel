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

## Usage

#### Use Toyyibpay Facade

```php
use Toyyibpay;

class MyController extends Controller
{
  // Controller functions here...
}
```

#### Get Bank

```php
Toyyibpay::getBanks();
```

#### Get Bank FPX

```php
Toyyibpay::getBanksFPX();
```

#### Get Package

```php
Toyyibpay::getPackages();
```

#### Create Category

```php
Toyyibpay::createCategory($name, $description);
```

#### Get Category

```php
Toyyibpay::getCategory($category_code);
```

#### Create Bill

```php
Toyyibpay::createBill($category_code, [
    'billName' => $request->bill_name,
    'billDescription' => $request->bill_description,
    ...
]);
```

Let's say you have an array of data that you want to convert into an object before passing it to ```Toyyibpay::createBill($category_code, $array)```. You can use the ```stdClass``` class, which is a built-in class in PHP for creating objects on-the-fly. Here's how you can do it:
```php
Toyyibpay::createBill($category_code, (object)$array)
```

#### Get Bill Payment Link

```php
Toyyibpay::billPaymentLink($bill_code);
```

### Opening an Issue
Before opening an issue there are a couple of considerations:
* You are all cute and geek!
* **Check** that the issue is not *specific to your development environment* setup.
* **Provide** *duplication steps*.
* Need a coach or assistance, I can do my best on Telegram: https://t.me/tarmizisanusi
* Please be considerate that this is an open source project that I provide to the community for FREE.

### License
Laravel Toyyibpay(the package) is licensed under the MIT license. Enjoy!
