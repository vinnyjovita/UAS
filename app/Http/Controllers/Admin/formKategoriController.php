<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formKategori;
use Illuminate\Http\Request;

class formKategoriController extends Controller
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
            $formkategori = formKategori::where('Kategori', 'LIKE', "%$keyword%")
                ->orWhere('Deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('File', 'LIKE', "%$keyword%")
                ->orWhere('Created_at', 'LIKE', "%$keyword%")
                ->orWhere('Created_by', 'LIKE', "%$keyword%")
                ->orWhere('halaman', 'LIKE', "%$keyword%")
                ->orWhere('Filter', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formkategori = formKategori::latest()->paginate($perPage);
        }

        return view('admin.form-kategori.index', compact('formkategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-kategori.create');
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
        
        formKategori::create($requestData);

        return redirect('admin/form-kategori')->with('flash_message', 'formKategori added!');
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
        $formkategori = formKategori::findOrFail($id);

        return view('admin.form-kategori.show', compact('formkategori'));
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
        $formkategori = formKategori::findOrFail($id);

        return view('admin.form-kategori.edit', compact('formkategori'));
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
        
        $formkategori = formKategori::findOrFail($id);
        $formkategori->update($requestData);

        return redirect('admin/form-kategori')->with('flash_message', 'formKategori updated!');
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
        formKategori::destroy($id);

        return redirect('admin/form-kategori')->with('flash_message', 'formKategori deleted!');
    }
}
