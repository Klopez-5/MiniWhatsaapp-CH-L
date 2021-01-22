<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Message extends Model
{
    use EncryptedAttribute;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $encryptable = [
        'text'
    ];

    protected $guarded = [];

    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'from');
    }
}
