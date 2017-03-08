# PHPChineseToPinyin

## 简介

PHP汉字转拼音类，支持多音字、简繁中文，共20902个汉字

有用到PHP汉字转拼音，网上找了一下，这个20902个汉字是微软的字库，支持多音字。

字库是在[OSC](https://www.oschina.net/code/snippet_862384_25415)找到的，他的源代码是每次动态分割字库处理，我直接处理成了静态的PHP数组代码，应该比动态处理要快一些。

我还自己写了转换方法，支持获取一段中文的全拼和拼音首字母，支持自定义拼音分割符，应该能满足大多数使用情况了。

必须在UTF-8编码的情况下使用，否则会报错。

我的博客：http://blog.yurunsoft.com

## 用法

###代码
```php
ChineseToPinyin::convert('测试一下啊',' ',$allWord,$firstWord);
print_r($allWord);
print_r($firstWord);
```

###输出结果

```php
Array
(
    [0] => ce shi yi xia a
    [1] => ce shi yi xia e
)
Array
(
    [0] => c s y x a
    [1] => c s y x e
)
```