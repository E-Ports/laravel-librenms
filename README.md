# laravel-librenms
> Pretén ser un driver entre el Laravel i el LibreNMS

## Instal·lació

* Publicació de la configuració:

`php artisan vendor:publish --provider="Axsor\LaravelLibrenms\LibrenmsServiceProvider"`

`php artisan vendor:publish --tag=config  --provider="Axsor\LaravelLibrenms\LibrenmsServiceProvider"`

Afegir els següents registres al fitxer environment:

```
LIBRENMS_URL=http://192.168.10.240
LIBRENMS_API_KEY=0a5355cb6126c6a890df5924342b24e0
```

## Utilització
```
// Return all devices
LibreNMS::devices();

// Return a device
LNMS::device(22);

// Delete a device
LNMS::deleteDevice(22);
```
