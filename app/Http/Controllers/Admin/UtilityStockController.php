<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\UtilityStock;
use Illuminate\Http\Request;

class UtilityStockController extends Controller
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
            $utilitystock = UtilityStock::where('name', 'LIKE', "%$keyword%")
                ->orWhere('stock', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $utilitystock = UtilityStock::latest()->paginate($perPage);
        }

        return view('admin.utility-stock.index', compact('utilitystock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.utility-stock.create');
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
        $validate = $request->validate([
            'name' => 'required|string',
            'stock' => 'required|numeric|min:0'
        ]);

        $requestData = $request->all();

        UtilityStock::create($requestData);

        return redirect('admin/utility-stock')->with('flash_message', 'UtilityStock added!');
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
        $utilitystock = UtilityStock::findOrFail($id);

        return view('admin.utility-stock.show', compact('utilitystock'));
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
        $utilitystock = UtilityStock::findOrFail($id);

        return view('admin.utility-stock.edit', compact('utilitystock'));
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
        $validate = $request->validate([
            'name' => 'required|string',
            'stock' => 'required|numeric|min:0'
        ]);

        $requestData = $request->all();

        $utilitystock = UtilityStock::findOrFail($id);
        $utilitystock->update($requestData);

        return redirect('admin/utility-stock')->with('flash_message', 'UtilityStock updated!');
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
        UtilityStock::destroy($id);

        return redirect('admin/utility-stock')->with('flash_message', 'UtilityStock deleted!');
    }
}
