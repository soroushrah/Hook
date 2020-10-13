<p align="center">
    <img src="/art/logo.png" width="400" height="123" alt="eventy logo">
</p>

<br>

Hook in Laravel


## About

Actions are pieces of code you want to execute at certain points in your code. 

## Installation

1. Install using Composer

```
composer require soroushrah/action
```

2. Add the service provider to the providers array in your `config/app.php`.

```php
    Soroush\Action\ActionServiceProvider::class,
    Soroush\Action\ActionBladeServiceProvider::class,
```

3. Add the facade in `config/app.php`

```php
    'Action' => \Soroush\Action\Facades\Action::class,
```


## Usage

### Actions

Anywhere in your code you can create a new action like so:

```php

\Action::action('my.hook', 'soroush');
```

The first parameter is the name of the hook And Everything You pass after is argument.

To listen to your hooks, you attach listeners. These are best added to your `AppServiceProvider` `boot()` method.

For example if you wanted to hook in to the above hook, you could do:

```
\Action::addAction('my.hook', function($what) {
    echo 'Hello '. $what;
}, 20, 1);
```

Again the first argument must be the name of the hook. 
second would be a callback.
Third is Priority.
Fourth is number of arguments would accepted.(default is 1)

### Using in Blade

Adding the same action as the one in the action example above:

```
@action('my.hook', 'awesome')
```

### Add Daynamic Relation Models

For add some relation on modles are not in your module you should use HasDynamicRelation trait in your all project model : 

```
class MyModel extends Model {
    use HasDynamicRelation;
}
```

Then add dynamic relation like example above on providers :

```
MyModel::addDynamicRelation('some_relation', function(MyModel $model) {
    return $model->hasMany(SomeRelatedModel::class);
});
```


## Credits
- Created by Soroush Rahmani
