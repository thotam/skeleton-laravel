<?php

namespace :vendor_namespace\Database\Seeders;

use Illuminate\Database\Seeder;
use Thotam\DtpStarterKit\Models\Role;
use Thotam\DtpStarterKit\Models\Permission;

class :studly_package_nameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
		app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		//Role
		$super_admin = Role::updateOrCreate([
			'name' => 'super-admin'
		],[
			"description" => "Super Admin",
			"group" => "Admin",
			"order" => 1,
			"lock" => true,
		]);

		$admin = Role::updateOrCreate([
			'name' => 'admin'
		],[
			"description" => "Admin",
			"group" => "Admin",
			"order" => 2,
			"lock" => true,
		]);


    }
}
