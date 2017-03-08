<?php
require 'ChineseToPinyin.class.php';
ChineseToPinyin::convert('测试一下啊',' ',$allWord,$firstWord);
print_r($allWord);
print_r($firstWord);