<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formProduct;
use Illuminate\Http\Request;

class formProductsController extends Controller
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
            $formproducts = formProduct::where('Kategori', 'LIKE', "%$keyword%")
                ->orWhere('Filter', 'LIKE', "%$keyword%")
                ->orWhere('Berat', 'LIKE', "%$keyword%")
                ->orWhere('Deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('Nama', 'LIKE', "%$keyword%")
                ->orWhere('File', 'LIKE', "%$keyword%")
                ->orWhere('Created_at', 'LIKE', "%$keyword%")
                ->orWhere('Created_by', 'LIKE', "%$keyword%")
                ->orWhere('Stock', 'LIKE', "%$keyword%")
                ->orWhere('Harga', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formproducts = formProduct::latest()->paginate($perPage);
        }

        return view('admin.form-products.index', compact('formproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-products.create');
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
        
        formProduct::create($requestData);

        return redirect('admin/form-products')->with('flash_message', 'formProduct added!');
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
        $formproduct = formProduct::findOrFail($id);

        return view('admin.form-products.show', compact('formproduct'));
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
        $formproduct = formProduct::findOrFail($id);

        return view('admin.form-products.edit', compact('formproduct'));
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
        
        $formproduct = formProduct::findOrFail($id);
        $formproduct->update($requestData);

        return redirect('admin/form-products')->with('flash_message', 'formProduct updated!');
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
        formProduct::destroy($id);

        return redirect('admin/form-products')->with('flash_message', 'formProduct deleted!');
    }
}
