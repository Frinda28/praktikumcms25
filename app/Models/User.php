<?php

namespace App\Models;

class User
{
    public static function all()
    {
        return [
            [
                'user_id' => 1,
                'nama' => 'Andi Saputra',
                'email' => 'andi@example.com',
                'password' => '123456',
                'telepon' => '081234567890'
            ],
            [
                'user_id' => 2,
                'nama' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'password' => 'abcdef',
                'telepon' => '089876543210'
            ],
            [
                'user_id' => 3,
                'nama' => 'Citra Lestari',
                'email' => 'citra@example.com',
                'password' => 'rahasia',
                'telepon' => '082112223334'
            ]
        ];
    }
}
