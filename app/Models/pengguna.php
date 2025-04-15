<?php

namespace App\Models;

class Pengguna
{
    public static function all()
    {
        return [
            [
                'user_id' => 1,
                'nama' => 'Sarah',
                'email' => 'sarah@mail.com',
                'password' => '123456',
                'telepon' => '08123456789'
            ],
            [
                'user_id' => 2,
                'nama' => 'Budi',
                'email' => 'budi@mail.com',
                'password' => 'abcdef',
                'telepon' => '08987654321'
            ],
        ];
    }

    public static function find($id)
    {
        $all = self::all();
        foreach ($all as $item) {
            if ($item['user_id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}
