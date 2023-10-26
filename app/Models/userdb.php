<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdb extends Model
{
    use HasFactory;
    protected $fillable = [
        name,email,phone_number,photo,combine_photo,birth_reg,nid,marriage_certificate,p_address,m_address,dob,profession,$photo,$photoName
    ];
    
}
