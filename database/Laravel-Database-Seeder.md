#Database Seeder
---

##Introduction
---
Laravel 包含一个填充类可以为你的数据库填充测试数据。所有的填充类都放在 database/seeds 目录下. 你可以随意为填充类命名， 但是更建议您遵守类似 UsersTableSeeder 的命名规范。通常， Laravel 默认定义了一个 DatabaseSeeder 类。通过这个类，你可以用 call 方法来运行其它的 seed 类从而控制数据填充的顺序。