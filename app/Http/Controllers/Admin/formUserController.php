<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formUser;
use Illuminate\Http\Request;

class formUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formuser = formUser::where('Username', 'LIKE', "%$keyword%")
                ->orWhere('Password', 'LIKE', "%$keyword%")
                ->orWhere('Role', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formuser = formUser::latest()->paginate($perPage);
        }

        return view('admin.form-user.index', compact('formuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        formUser::create($requestData);

        return redirect('admin/form-user')->with('flash_message', 'formUser added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $formuser = formUser::findOrFail($id);

        return view('admin.form-user.show', compact('formuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $formuser = formUser::findOrFail($id);

        return view('admin.form-user.edit', compact('formuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $formuser = formUser::findOrFail($id);
        $formuser->update($requestData);

        return redirect('admin/form-user')->with('flash_message', 'formUser updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        formUser::destroy($id);

        return redirect('admin/form-user')->with('flash_message', 'formUser deleted!');
    }
}
