<?php

$router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Account Module Routes for CRUD
$router->get('account', ['as' => 'account.index', 'uses' => 'AccountController@index']);
$router->get('account/create', ['as' => 'account.create', 'uses' => 'AccountController@create']);
$router->post('account', ['as' => 'account.store', 'uses' => 'AccountController@store']);
$router->get('account/{account}/edit', ['as' => 'account.edit', 'uses' => 'AccountController@edit']);
$router->patch('account/{account}', ['as' => 'account.update', 'uses' => 'AccountController@update']);
$router->get('account/{account}/delete', ['as' => 'account.delete', 'uses' => 'AccountController@delete']);
$router->delete('account/{account}', ['as' => 'account.destroy', 'uses' => 'AccountController@destroy']);

// Asset Module Routes for CRUD
$router->get('asset', ['as' => 'asset.index', 'uses' => 'AssetController@index']);
$router->get('asset/create', ['as' => 'asset.create', 'uses' => 'AssetController@create']);
$router->post('asset', ['as' => 'asset.store', 'uses' => 'AssetController@store']);
$router->get('asset/{asset}/edit', ['as' => 'asset.edit', 'uses' => 'AssetController@edit']);
$router->patch('asset/{asset}', ['as' => 'asset.update', 'uses' => 'AssetController@update']);
$router->get('asset/{asset}/delete', ['as' => 'asset.delete', 'uses' => 'AssetController@delete']);
$router->delete('asset/{asset}', ['as' => 'asset.destroy', 'uses' => 'AssetController@destroy']);

// Branch Module Routes for CRUD
$router->get('branch', ['as' => 'branch.index', 'uses' => 'BranchController@index']);
$router->get('branch/create', ['as' => 'branch.create', 'uses' => 'BranchController@create']);
$router->post('branch', ['as' => 'branch.store', 'uses' => 'BranchController@store']);
$router->get('branch/{branch}/edit', ['as' => 'branch.edit', 'uses' => 'BranchController@edit']);
$router->patch('branch/{branch}', ['as' => 'branch.update', 'uses' => 'BranchController@update']);
$router->get('branch/{branch}/delete', ['as' => 'branch.delete', 'uses' => 'BranchController@delete']);
$router->delete('branch/{branch}', ['as' => 'branch.destroy', 'uses' => 'BranchController@destroy']);

// Client Module Routes for CRUD
$router->get('client', ['as' => 'client.index', 'uses' => 'ClientController@index']);
$router->get('client/create', ['as' => 'client.create', 'uses' => 'ClientController@create']);
$router->post('client', ['as' => 'client.store', 'uses' => 'ClientController@store']);
$router->get('client/{client}/edit', ['as' => 'client.edit', 'uses' => 'ClientController@edit']);
$router->patch('client/{client}', ['as' => 'client.update', 'uses' => 'ClientController@update']);
$router->get('client/{client}/delete', ['as' => 'client.delete', 'uses' => 'ClientController@delete']);
$router->delete('client/{client}', ['as' => 'client.destroy', 'uses' => 'ClientController@destroy']);

// Employee Module Routes for CRUD
$router->get('employee', ['as' => 'employee.index', 'uses' => 'EmployeeController@index']);
$router->get('employee/create', ['as' => 'employee.create', 'uses' => 'EmployeeController@create']);
$router->post('employee', ['as' => 'employee.store', 'uses' => 'EmployeeController@store']);
$router->get('employee/{employee}/edit', ['as' => 'employee.edit', 'uses' => 'EmployeeController@edit']);
$router->patch('employee/{employee}', ['as' => 'employee.update', 'uses' => 'EmployeeController@update']);
$router->get('employee/{employee}/delete', ['as' => 'employee.delete', 'uses' => 'EmployeeController@delete']);
$router->delete('employee/{employee}', ['as' => 'employee.destroy', 'uses' => 'EmployeeController@destroy']);

// Furniture Module Routes for CRUD
$router->get('furniture', ['as' => 'furniture.index', 'uses' => 'FurnitureController@index']);
$router->get('furniture/create', ['as' => 'furniture.create', 'uses' => 'FurnitureController@create']);
$router->post('furniture', ['as' => 'furniture.store', 'uses' => 'FurnitureController@store']);
$router->get('furniture/{furniture}/edit', ['as' => 'furniture.edit', 'uses' => 'FurnitureController@edit']);
$router->patch('furniture/{furniture}', ['as' => 'furniture.update', 'uses' => 'FurnitureController@update']);
$router->get('furniture/{furniture}/delete', ['as' => 'furniture.delete', 'uses' => 'FurnitureController@delete']);
$router->delete('furniture/{furniture}', ['as' => 'furniture.destroy', 'uses' => 'FurnitureController@destroy']);

// Project Module Routes for CRUD
$router->get('project', ['as' => 'project.index', 'uses' => 'ProjectController@index']);
$router->get('project/create', ['as' => 'project.create', 'uses' => 'ProjectController@create']);
$router->post('project', ['as' => 'project.store', 'uses' => 'ProjectController@store']);
$router->get('project/{project}/edit', ['as' => 'project.edit', 'uses' => 'ProjectController@edit']);
$router->patch('project/{project}', ['as' => 'project.update', 'uses' => 'ProjectController@update']);
$router->get('project/{project}/delete', ['as' => 'project.delete', 'uses' => 'ProjectController@delete']);
$router->delete('project/{project}', ['as' => 'project.destroy', 'uses' => 'ProjectController@destroy']);

// Vendor Module Routes for CRUD
$router->get('vendor', ['as' => 'vendor.index', 'uses' => 'VendorController@index']);
$router->get('vendor/create', ['as' => 'vendor.create', 'uses' => 'VendorController@create']);
$router->post('vendor', ['as' => 'vendor.store', 'uses' => 'VendorController@store']);
$router->get('vendor/{vendor}/edit', ['as' => 'vendor.edit', 'uses' => 'VendorController@edit']);
$router->patch('vendor/{vendor}', ['as' => 'vendor.update', 'uses' => 'VendorController@update']);
$router->get('vendor/{vendor}/delete', ['as' => 'vendor.delete', 'uses' => 'VendorController@delete']);
$router->delete('vendor/{vendor}', ['as' => 'vendor.destroy', 'uses' => 'VendorController@destroy']);
