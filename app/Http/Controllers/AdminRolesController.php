<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class AdminRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(15);
        return view('admin.roles.index', compact('roles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'display_name' => 'required|max:255',
            'name' => 'required|max:255|alphadash|unique:roles,name',
            'description' => 'sometimes|max:255'
          ]);
          $role = new Role();
          $role->name = $request->name;
          $role->display_name = $request->display_name;
          $role->description = $request->description;
          $role->save();
          if($request->permissions) {
            $role->syncPermissions($request->permissions);
        }
          \Flash::success('¡El Rol fue agregado exitosamente!');
          return redirect()->route('admin.roles');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        return view('admin.roles.show', compact('role'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'display_name' => 'required|max:255',
            'description' => 'sometimes|max:255'
          ]);
          $role = Role::findOrFail($id);
          $role->display_name = $request->display_name;
          $role->description = $request->description;
          $role->save();
          if($request->permissions) {
              $role->syncPermissions($request->permissions);
          }
          \Flash::success('Se ha actualizado el Rol: '. $role->display_name);
          return redirect()->route('admin.roles.show', $id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::findOrFail($id)->delete();
        return back();
    }
}