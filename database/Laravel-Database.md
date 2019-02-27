#Database Migration
---

##Introduction
---
迁移就像是数据库的版本控制, 允许团队简单轻松的编辑并共享应用的数据库表结构，迁移通常和 Laravel 的 数据库结构生成器配合使用，让你轻松地构建数据库结构。如果你曾经试过让同事手动在数据库结构中添加字段，那么数据库迁移可以让你不再需要做这样的事情。

Laravel 的 Schema 门面 对所有 Laravel 支持的数据库系统提供了创建和操作数据表的相应支持。

##Create Migration
---

```Shell
php artisan make:migration create_users_table
```
or you can indicate the paticular table 

Example:
```Shell
php artisan make:migration create_users_table --create=users

php artisan make:migration add_votes_to_users_table --table=users
```
##Migration Structure
---
```PHP
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * 运行数据库迁移
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('airline');
            $table->timestamps();
        });
    }

    /**
     * 回滚数据库迁移
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flights');
    }
}
```

##Run Migration
---
执行 Artisan 命令 `migrate` 来运行所有未完成的迁移:
```Shell
php artisan migrate
```
###在生产环境强制执行迁移
一些迁移操作是具有破坏性的， 这意味着可能会导致数据丢失。 为了防止有人在生产环境中运行这些命令， 系统会在这些命令被运行之前与你进行确认。如果要强制忽略系统的提示运行命令， 则可以使用 `--force` 标记：
```Shell
php artisan migrate --force
```
###回滚迁移
若要回滚最后一次迁移， 可以使用 rollback 命令。 此命令将回滚最后一次“迁移”的操作，其中可能包含多个迁移文件：
```Shell
php artisan migrate:rollback
```
你可以在 rollback 命令后面加上 step 参数，来限制回滚迁移的个数。 例如，以下命令将回滚最近五次迁移：
```Shell
php artisan migrate:rollback --step=5
```
`migrate:reset` 命令可以回滚应用程序中的所有迁移：
```Shell
php artisan migrate:reset
```
###使用单个命令来执行回滚或迁移
`migrate:refresh` 命令不仅会回滚数据库的所有迁移还会接着运行 `migrate` 命令。 这个命令可以高效地重建整个数据库：
```Shell
php artisan migrate:refresh

// 刷新数据库结构并执行数据填充
php artisan migrate:refresh --seed
```
使用 `refresh` 命令并提供 `step` 参数来回滚并再执行最后指定的迁移数。例如， 以下命令将回滚并重新执行最后五次迁移：
```Shell
php artisan migrate:refresh --step=5
```
删除所有表 & 迁移
The `migrate:fresh` 命令会从数据库中删除所有表，然后执行 `migrate` 命令:
```Shell
php artisan migrate:fresh

php artisan migrate:fresh --seed
```