<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formBank;
use Illuminate\Http\Request;

class formBankController extends Controller
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
            $formbank = formBank::where('Norek', 'LIKE', "%$keyword%")
                ->orWhere('Nama', 'LIKE', "%$keyword%")
                ->orWhere('File', 'LIKE', "%$keyword%")
                ->orWhere('Created_at', 'LIKE', "%$keyword%")
                ->orWhere('Created_by', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formbank = formBank::latest()->paginate($perPage);
        }

        return view('admin.form-bank.index', compact('formbank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-bank.create');
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
        
        formBank::create($requestData);

        return redirect('admin/form-bank')->with('flash_message', 'formBank added!');
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
        $formbank = formBank::findOrFail($id);

        return view('admin.form-bank.show', compact('formbank'));
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
        $formbank = formBank::findOrFail($id);

        return view('admin.form-bank.edit', compact('formbank'));
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
        
        $formbank = formBank::findOrFail($id);
        $formbank->update($requestData);

        return redirect('admin/form-bank')->with('flash_message', 'formBank updated!');
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
        formBank::destroy($id);

        return redirect('admin/form-bank')->with('flash_message', 'formBank deleted!');
    }
}
