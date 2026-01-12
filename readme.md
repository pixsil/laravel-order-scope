# Order scope file for Laravel

Order scope file for Laravel. Automatically order your records based on an `order` column.

## Donate

Find this project useful? You can support me with a Paypal donation:

[Make Paypal Donation](https://www.paypal.com/donate/?hosted_button_id=2XCS6R3CTC5BA)

## Installation

For a quick install, run this from your project root:

```bash
mkdir -p app/Scopes
wget https://raw.githubusercontent.com/pixsil/laravel-order-scope/main/scopes/OrderScope.php -O app/Scopes/OrderScope.php
```

## Usage

Use the scope like this:

```php
Car::ordered()->get();
```

If you want the order scope to always be applied, use the following model method:

```php
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OrderScope);
    }
```
