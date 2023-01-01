<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Admin $pengguna) {
            $pengguna->password = Hash::make($pengguna->password);
        });

        static::updating(function (Admin $pengguna) {
            if ($pengguna->isDirty(["password"])) {
                $pengguna->password = Hash::make($pengguna->password);
            }
        });
    }
}
