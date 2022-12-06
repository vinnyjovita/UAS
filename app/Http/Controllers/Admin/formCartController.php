<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formCart;
use Illuminate\Http\Request;

class formCartController extends Controller
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
            $formcart = formCart::where('Userid', 'LIKE', "%$keyword%")
                ->orWhere('Product_id', 'LIKE', "%$keyword%")
                ->orWhere('Qty', 'LIKE', "%$keyword%")
                ->orWhere('Desc', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formcart = formCart::latest()->paginate($perPage);
        }

        return view('admin.form-cart.index', compact('formcart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-cart.create');
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
        
        formCart::create($requestData);

        return redirect('admin/form-cart')->with('flash_message', 'formCart added!');
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
        $formcart = formCart::findOrFail($id);

        return view('admin.form-cart.show', compact('formcart'));
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
        $formcart = formCart::findOrFail($id);

        return view('admin.form-cart.edit', compact('formcart'));
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
        
        $formcart = formCart::findOrFail($id);
        $formcart->update($requestData);

        return redirect('admin/form-cart')->with('flash_message', 'formCart updated!');
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
        formCart::destroy($id);

        return redirect('admin/form-cart')->with('flash_message', 'formCart deleted!');
    }
}
