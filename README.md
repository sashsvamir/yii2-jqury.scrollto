# Yii2 Asset jquery.scrollto


## Installation

`composer require sashsvamir/yii2-jqury.scrollto`




## Using


in `AppAsset`:
```php
class AppAsset extends AssetBundle
{
	// ...
    public $depends = [
        // ...
        'sashsvamir\scrollto\ScrollToAsset'
    ];
}

```


in view:
```php
$this->registerAssetBundle(\sashsvamir\scrollto\ScrollToAsset::className());
```


