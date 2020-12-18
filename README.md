JsonRequest Bundle
=================================

This bundle is a copy (with some minor changes) of [JsonRequest Bundle](https://github.com/symfony-bundles/json-request-bundle) which, for some reasons, was deleted by authors.

It eases work with JSON requests and treats them as standard requests without using «crutches».

Installation
------------
1) Require the bundle with composer:
``` bash
composer require nw/json-request-bundle
```

2) Register the bundle in the application:
In `app/AppKernel.php` prior to Symfony version `4.0`:
```php
public function registerBundles()
{
    $bundles = [
        // ... ,
        new NW\JsonRequestBundle\NWJsonRequestBundle()
    ];

    // ...
    return $bundles;
}
```

In `config/bundles.php` when Symfony version is `4.0` and higher
```php
return [
    //... other bundles
    NW\JsonRequestBundle\NWJsonRequestBundle::class => ['all' => true]
];
```

Usage
------------

Previously to handle JSON-request, you were forced to do something similar to:
``` php
public function indexAction(Request $request)
{
    $data = json_decode($request->getContent(), true);

    // uses request data
    $name = isset($data['name']) ? $data['name'] : null;
}
```

With this bundle you can work with JSON-request as with standard request:
``` php
public function indexAction(Request $request)
{
    $name = $request->get('name');
}
```
