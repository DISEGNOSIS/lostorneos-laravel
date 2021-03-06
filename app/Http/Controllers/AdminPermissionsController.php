<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Permission;
use Laracasts\Flash\Flash;

class AdminPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $permissions = Permission::paginate(15);
      	return view('admin.permissions.index', compact('permissions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      	return view('admin.permissions.create');
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
          'description' => 'sometimes|max:255'
        ]);
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        if($permission->save()){
			Flash::success("¡El Permiso $permission->display_name fue agregado exitosamente!");
			return redirect()->route('admin.permissions');
		} else {
			Flash::error('No se ha podido guardar el Permiso.');
        	return back();
		}
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$permission = Permission::findOrFail($id);
		return view('admin.permissions.show', compact('permission'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$permission = Permission::findOrFail($id);
		return view('admin.permissions.edit', compact('permission'));
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
		$permission = Permission::findOrFail($id);
		$permission->display_name = $request->display_name;
		$permission->description = $request->description;
		if($permission->save()){
			Flash::success('Se ha actualizado el Permiso: '. $permission->display_name);
			return redirect()->route('admin.permissions.show', $id);
		} else {
			Flash::error('No se ha podido guardar el Permiso.');
        	return back();
		}
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Permission::findOrFail($id)->delete();
		Flash::error('Se ha borrado el Permiso.');
        return back();
    }
}