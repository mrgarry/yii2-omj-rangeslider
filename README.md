rangeSlider.js 
===============
Asset bundle for (http://rangeslider.js.org/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require omj/yii2-omj-rangeslider "dev-master"
```

or add

```
"omj/yii2-omj-rangeslider": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by registering it in the View file :

```php
<?= \omj\RangeSliderAsset::register($this); ?>```