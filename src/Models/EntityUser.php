<?php

namespace Doc88\LaravelEntityPermission\Models;

use Illuminate\Database\Eloquent\Model;

class EntityUser extends Model {

    protected $table = 'entities_users';

    public $guarded = ['id'];
}
