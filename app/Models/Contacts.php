<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey= 'id';
    protected $fillable = ['contactName', 'contactNum', 'address'];

    public function message(){
        return $this->hasMany('App\Models\Message', 'user_id');
    }

}
