<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AdminPermissionController extends Controller
{

    private $permission;
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index()
    {
        $permissions = $this->permission->latest()->paginate(10);
        return view('admin.permission.index', compact('permissions'));
    }

    public function createPermissions()
    {
        return view('admin.permission.add');
    }

    public function store(Request $request)
    {
        $pemission = Permission::create([
            'name' => $request->module_parent,
            'display_name' => $request->module_parent,
            'parent_id' => 0
        ]);

        foreach ($request->module_chilrent as $value) {
            Permission::create([
                'name' => $value,
                'display_name' => $value,
                'parent_id' => $pemission->id,
                'key_code' => $request->module_parent . '_' . $value
            ]);
        }
        return redirect()->route('permissions.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTraits($id, $this->permission);
    }
}
