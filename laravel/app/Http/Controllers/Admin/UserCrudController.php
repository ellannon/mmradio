<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Auth;

class UserCrudController extends \Backpack\PermissionManager\app\Http\Controllers\UserCrudController
{
    public function setup()
    {
        $this->crud->setModel(config('backpack.permissionmanager.user_model'));
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.user'), trans('backpack::permissionmanager.users'));
        $this->crud->setRoute(config('backpack.base.route_prefix').'/user');
        $this->crud->enableAjaxTable();

        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
        ]);

        $this->crud->addColumn([ // n-n relationship (with pivot table)
           'label'     => trans('backpack::permissionmanager.roles'), // Table column heading
           'type'      => 'select_multiple',
           'name'      => 'roles', // the method that defines the relationship in your Model
           'entity'    => 'roles', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model'     => "Backpack\PermissionManager\app\Models\Roles", // foreign key model
        ]);

        $this->crud->addColumn([ // n-n relationship (with pivot table)
           'label'     => trans('backpack::permissionmanager.extra_permissions'), // Table column heading
           'type'      => 'select_multiple',
           'name'      => 'permissions', // the method that defines the relationship in your Model
           'entity'    => 'permissions', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model'     => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
        ]);

        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => trans('backpack::permissionmanager.password'),
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => trans('backpack::permissionmanager.password_confirmation'),
                'type'  => 'password',
            ],
        ]);

		if (Auth::user()->hasRole('Superadmin') || Auth::user()->hasRole('Admin')) {
			$this->crud->addFields([
				[
					'label'     => 'Roles',
					'type'      => 'checklist_roles',
					'name'      => 'roles',
					'entity'    => 'roles',
					'attribute' => 'name',
					'limit' 	=> '1',
					'model'     => "Backpack\PermissionManager\app\Models\Role",
					'pivot'     => true,
				],
			]);
		}

		if (Auth::user()->hasRole('Admin')) {
			$this->crud->addClause('whereHas', 'roles', function($query) {
				$query->whereNotIn('id', [1]);
			});
		}
    }
}
