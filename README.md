# laravel-librenms
> Aims to be driver between Laravel and LibreNMS server

## Installation

`composer require axsor/laravel-librenms`

## Configuration

* Publish LibreNMS config file:

`php artisan vendor:publish` -> and select **Axsor\LaravelLibreNMS\LibreNMSServiceProvider**

or

`php artisan vendor:publish --provider="Axsor\LaravelLibreNMS\LibreNMSServiceProvider"`

or

`php artisan vendor:publish --tag=config  --provider="Axsor\LaravelLibreNMS\LibreNMSServiceProvider"`

Add the next lines to environment file
```
LIBRENMS_API_URL="protocol + hostname/ip + '/api/v0'"
LIBRENMS_API_KEY="api key of librenms"
```

* Configure more than one LibreNMS server:

First add the **url** and **key** for each extra LibreNMS server into `.env` file:

```
LIBRENMS_SERVER2_API_URL="localhost:8000/api/v0"
LIBRENMS_SERVER2_API_KEY="long_api_token_key1"
```

Add into `config/librenms.php` new entry into connections array:

```
'connections' => [
    'default' => ...,
    
    'custom_server_2' => [
        'url' => env('LIBRENMS_SERVER2_API_URL'),
        'key' => env('LIBRENMS_SERVER2_API_KEY')
    ]
]
```

Finally, to use extra connection call `use()` method of `LibreNMS` and pass *server_name* as parameter.

`LibreNMS::use('custom_server_2')->devices();`


* To call **LibreNMS facade**:

`use Axsor\LaravelLibreNMS\LibreNMSFacade as LibreNMS;`


## Use
The return is laravel model. But in case of call methods returns list of objects, the result
is a **Collection**.

```
// Return all devices into collection
LibreNMS::devices();

// Return a device
LibreNMS::device(22);
LibreNMS::device("localhost");

// Return propierty of device using alternative connection
LibreNMS::use('test')->device("localhost")->hostname;
```
