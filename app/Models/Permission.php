<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Permission\Models\Role as ModelsRole;
use Spatie\Permission\Models\Permission as ModelsPermission;

// $role = Role::create(['name' => 'admin']);
// $permission = Permission::create(['name' => 'edit_users']);

class Permission extends ModelsPermission
{
   
    use HasFactory;
}
