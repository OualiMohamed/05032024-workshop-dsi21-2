<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getContact() {
        $message = "Hello DSI21 G2";
        return $message;
    }

    public function getDetails() {
        $details = ['50% coton', '30% laine', '20% polyester'];
        return $details;
    }
}
