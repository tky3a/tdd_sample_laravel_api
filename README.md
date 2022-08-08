# 顧客訪問記録アプリのAPIをテスト駆動開発でやってみる

# 環境
Laravel 8.*
PHP 7.3
composerでプロジェクト作成

## プロジェクト作成
```
composer create-project --prefer-dist laravel/laravel tdd_sample "8.*"
```

## テスト用Seeder作成
```
php artisan make:seeder TestDataSeeder
```


## Seederの実行
```
// 開発環境のシーダー
php artisan make:seeder

// テスト用のシーダー
php artisan make:seeder TestDataSeeder
```

## キャッシュ削除
```
php artisan optimize:clear
```

## マイグレーション
オブションに「--database=DB名」とすれば指定したDBに対して実行できるのでテストの場合はオプションを含める(今回はtest_database)
```
// マイグレーション
php artisan migrate

// マイグレーションリセット
php artisan migrate:reset

// テスト用マイグレーション
php artisan migrate --database=test_database

```