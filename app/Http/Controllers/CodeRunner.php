<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Spatie\Permission\Models\Role as SpatieRole;

class CodeRunner extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Implement for superuser only
    }

    public function index($program,$param1='',$param2='')
    {
        $this->$program($param1,$param2);
        $this->return_message();
    }

    private function tester($param1='',$param2=''){
        // Adding permissions to a user
        // $user->givePermissionTo('edit articles');

        // // Adding permissions via a role
        // $user->assignRole('writer');

        // $role->givePermissionTo('edit articles');
        //Auth::user()->revokePermissionTo('add_user');

        //Auth::user()->removeRole('admin');
        //Auth::user()->assignRole('admin');
        echo json_encode(Auth::user()->roles); // Se user roles
        
    }

    private function create_role($param1='',$param2=''){
        SpatieRole::create(['name'=>$param1]);
    }

    private function create_permission($param1='',$param2=''){ 
        SpatiePermission::create(['name'=>$param1]);
    }

    private function assign_permission_to_role($param1='',$param2=''){
        $permission = SpatiePermission::findByName($param1);
        $role = SpatieRole::findByName($param2);
        
        $role->givePermissionTo($permission);
    }

    private function remove_permission_to_role($param1='',$param2=''){
        $permission = SpatiePermission::findByName($param1);
        $role = SpatieRole::findByName($param2);
        
        $permission->removeRole($role);
    }

    private function return_message($status='200',$message = 'Operation Successful!!!'){

        $result['status'] = $status;
        $result['message'] = $message;
        print (json_encode($result));
    }
}
