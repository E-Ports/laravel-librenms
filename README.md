# laravel-librenms
> Aims to be driver between Laravel and LibreNMS server

## Installation

* Configure **`LibreNMS`**:

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

* More than one LibreNMS server:

First add the **url** and **key** for each extra LibreNMS server into `.env` file:

```
LIBRENMS_SERVER2_URL="localhost:8000/api/v0"
LIBRENMS_SERVER2_KEY="too_large_token_api_key1"
```

Add into `config/librenms.php` new entry into connections array:

```
'connections' => [
    'default' => ...,
    
    'custom_server_2' => [
        'url' => env('LIBRENMS_SERVER2_URL'),
        'key' => env('LIBRENMS_SERVER2_KEY')
    ]
]
```

Finally, to use extra connection call `use()` method of `LibreNMS` and pass *server_name* as parameter.

`LibreNMS::use('custom_server_2')->devices();`


* To call **LibreNMS**:

`use Axsor\LaravelLibreNMS\LibreNMSFacade as LibreNMS;`


## Use
The return is collection of models into a **specific** collection class.

```
// Return all devices
LibreNMS::devices();

// Return a device
LNMS::device(22);

// Delete and return a device
LNMS::deleteDevice(22);
```
