<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table ='members';

    protected $fillable = [
        'id',
        'username',
        'password',
        'company_email',
        'registrant_name',
        'subscriber_email',
        'phone number',
        'registered_phone_number',
        'address',
        'position',
        'website',
        'member_introduction',
        'is_active',
        'is_open',
        'company_name',
        'is_master',
    ];
}
