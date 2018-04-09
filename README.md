# laravel-librenms
> Aims to be driver between Laravel and LibreNMS server

## Index
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
    * [Device](#device)
    * [Port](#port)
    * [Service](#service)
    * [Location](#location)
* [Testing](#testing)

## Installation
```
composer require axsor/laravel-librenms
```

For versions under laravel 5.5 must add the next line on `config/app.php` into **providers array**:
```
Axsor\LaravelLibreNMS\LibreNMSServiceProvider::class,
```

**Until there is not stable version of the package, must add the next line on `package.json` of laravel**
```
"minimum-stability": "dev"
```

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


## Usage
The return is **laravel model**. But in case of call methods returns list of objects, the result
is a **Collection** of laravel models.

**IPv6 is not tested**.

### Device
```
// Get all devices into collection
LibreNMS::devices();

// Get a device
LibreNMS::device(22);
LibreNMS::device("localhost");

// Get propierty of device using alternative connection
LibreNMS::use('test')->device("localhost")->hostname;

// Get all IPs from a device into collection
LibreNMS::getDeviceIps("localhost");
LibreNMS::device(22)->getIps(); // It can be executed from Device model
```

### Port
```
// Get all ports into collection
LibreNMS::ports();

// Get a port
LibreNMS::port(22);

// Get IP from port
LibreNMS::port(22)->getIp();
LibreNMS::getPortIp(22);
```

### Service
```
// Get all services
LibreNMS::services();
```

### Location
```
// Get all locations
LibreNMS::locations();
```

## Testing
If you want to use different connection on test must add connection parameters on **librenms** connection
file and bind laravel container using specific connection:

```
$this->app->bind('librenms', function () {
    $lnms = new \Axsor\LaravelLibreNMS\LibreNMS;
    $lnms->use('testing_connection_name');
    return $lnms;
});
```
