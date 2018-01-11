<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->get(['id','name','description','status']);
        $number = 1;

        return view('admin.role.index', compact('roles','number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = new Role();

          $this->validate($request,[
                        'name' => 'required|unique:roles|max:100',
                    ],[
                        'name.required' => ' The role name field is required.',
                        'name.max' => ' The role name may not be greater than 100 characters.',
                        'name.unique' => ' It seems role name already exist',
                    ]);

        $roles->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $role = Role::findOrFail($id);
       
        return view('admin.role.show',compact(['role']));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findorFail($id);

        return view('admin.role.edit', compact('role'));
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
        //dd($request->all());
        $role = Role::find($id);

        $this->validate($request,[
                       'name' => 'required|max:100',
                   ],[
                       'name.required' => ' The role name field is required.',
                       'name.max' => ' The role name may not be greater than 100 characters.',
                   ]);
        
        $role->update($request->all());
        return redirect('admin/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect('admin/role');
    }
}
