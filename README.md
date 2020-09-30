# Laravel 8 使用建立指令建立測試案例

引入 iak 的 make-testable 套件來擴增建立任何類別的測試案例，只要在命令列上執行 __phpunit__，就可以進行測試。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __make__ 來建立類別，並同時建立該類別測試案例。
```sh
$ php artisan make:{類別} {類別名稱} --test
```
- 執行 __phpunit__ 進行測試，在不同的測試類型中，所需要保護的面向不太相同。
```sh
$ vendor/bin/phpunit
```

----

## 畫面截圖
![](https://i.imgur.com/7wf6rN2.png)
> 測試的方法很簡單，就是把參數丟給函數或方法，然後檢測它執行的結果是否符合預期