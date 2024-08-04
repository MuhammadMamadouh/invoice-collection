<?php

namespace App\Models;

use App\Interfaces\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsGroup extends Model implements Translatable
{
    use HasFactory;
    protected $fillable = ['en_name'];


    public static function getTranslatableFields() : array
    {
        return ['name'];
    }


    public function clients()
    {
        return $this->belongsToMany(Client::class, 'clients_groups_pivot', 'clients_group_id', 'client_id');
    }
}
