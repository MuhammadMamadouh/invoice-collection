<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsGroup extends Model
{
    use HasFactory;
    protected $fillable = ['en_name','clients'];


    public function clients()
    {
        return $this->belongsToMany(Client::class, 'clients_groups_pivot', 'clients_group_id', 'client_id');
    }
}
