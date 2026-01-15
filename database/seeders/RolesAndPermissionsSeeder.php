<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
       
        $adminRole = Role::create(['name' => 'admin']);

     
        $viewDashboard = Permission::create(['name' => 'view dashboard']);

     
        $adminRole->givePermissionTo($viewDashboard);
 
        $user = User::where('email', 'admin@example.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }
    }
}
