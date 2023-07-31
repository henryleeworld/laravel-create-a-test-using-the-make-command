# Laravel 10 使用建立指令建立測試案例

`Artisan` 是內建的指令集合，它能提供許多好用的指令來協助你開發程式，方便在建立實例，同時建立相對應測試案例，若要執行測試，只要在終端機執行 __Artisan__ 指令的 __test__ 來進行測試。

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
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __make__ 來建立實例，並同時建立該實例測試案例。
```sh
$ php artisan make:{實例} {實例名稱} --test
```
- 執行 __Artisan__ 指令的 __test__ 來進行測試，在不同的測試類型中，所需要保護的面向不太相同。
```sh
$ php artisan test
```

----

## 畫面截圖
![](https://i.imgur.com/EA5RDEK.png)
> 在功能測試目錄建立測試

![](https://i.imgur.com/IfQuClZ.png)
> `Artisan` 的測試執行程式會提供較多輸出的測試報告，以讓我們能更輕鬆地進行開發與偵錯
