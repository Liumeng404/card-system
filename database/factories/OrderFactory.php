<?php
use Faker\Generator as Faker; $sp4b4cfb->define(App\Order::class, function (Faker $sp51d880) { $spd56469 = date('YmdHis') . mt_rand(10000, 99999); while (\App\Order::whereOrderNo($spd56469)->exists()) { $spd56469 = date('YmdHis') . mt_rand(10000, 99999); } $spd6b98d = random_int(0, 1) ? $sp51d880->email : 'user01@qq.com'; $spac16b8 = 1000; $sp806ba4 = random_int(0, 1) * 100; $sp1060be = $spac16b8 - $sp806ba4; return array('user_id' => 2, 'order_no' => $spd56469, 'product_id' => 1, 'count' => 1); });