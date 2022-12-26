# はじめに
このworkはユーザー画面と管理画面に分かれています。
今までのworkでは管理画面の実装をしていないので、管理画面について簡単に説明します。
管理画面は、管理権限を持ったユーザーのみがアクセスできるように実装します。
管理画面では、ユーザー画面で表示したいデータの登録、編集、削除などを行います。
例えば、ECサイトであれば新しく入荷した商品を表示したいときに管理画面に商品を登録することで、ユーザー画面に表示されるようにする、といった感じです。
管理画面があることで、プログラミングの知識がない人でもあるデータの操作ができますし、うまく実装すれば例外的なデータによるバグも防ぐことができます。

## 機能概要

### 商品
管理画面で登録した商品がユーザー画面に表示される。

### 会員登録
会員登録できる。
環境構築時に管理ユーザーを作成するように実装してある。

### ログイン・ログアウト
ログイン、ログアウトできる。
ログイン時、ログアウト時で表示や利用できる機能が異なる。

### お気に入り
ログイン時に利用できる。
商品詳細画面でアイコンを押下することでお気に入り登録・解除できる。

### お知らせ
管理画面で登録したお知らせがユーザー画面に表示される。
掲載開始日時以降、掲載終了日時以前のお知らせが表示される。

## 一部実装済みのファイル

### Controller
Laravel\src\app\Http\Controllers\admin\AdminController.php
Laravel\src\app\Http\Controllers\admin\ProductController.php

### Model
Laravel\src\app\Models\Category.php
Laravel\src\app\Models\Product.php

### FormRequest
Laravel\src\app\Http\Requests\RegistProductRequest.php

### Migration
Laravel\src\database\migrations\2022_11_09_070000_create_users_table.php

### Seeder
Laravel\src\database\seeders\UserSeeder.php

### css
Laravel\src\public\css\admin_product.css
Laravel\src\public\css\admin.css

### blade
Laravel\src\resources\views\admin\product\add.blade.php
Laravel\src\resources\views\admin\index.blade.php

### routing
Laravel\src\routes\web.php

### rule
Laravel\src\app\Rules\CheckCategoryIdRule.php
Laravel\src\app\Rules\DupEmailRule.php

## 配置済みの画像ファイル(カテゴリ用の画像)
Laravel\src\public\img\category\books.jpg
Laravel\src\public\img\category\fashion.jpg
Laravel\src\public\img\category\toys.jpg