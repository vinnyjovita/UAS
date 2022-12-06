<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formTransaction;
use Illuminate\Http\Request;

class formTransactionController extends Controller
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
            $formtransaction = formTransaction::where('Userid', 'LIKE', "%$keyword%")
                ->orWhere('Transactionnumber', 'LIKE', "%$keyword%")
                ->orWhere('Total_berat', 'LIKE', "%$keyword%")
                ->orWhere('Phone', 'LIKE', "%$keyword%")
                ->orWhere('No_resi', 'LIKE', "%$keyword%")
                ->orWhere('Kurir', 'LIKE', "%$keyword%")
                ->orWhere('Kota', 'LIKE', "%$keyword%")
                ->orWhere('Ongkir', 'LIKE', "%$keyword%")
                ->orWhere('Total', 'LIKE', "%$keyword%")
                ->orWhere('Bukti_transaksi', 'LIKE', "%$keyword%")
                ->orWhere('Status', 'LIKE', "%$keyword%")
                ->orWhere('Date', 'LIKE', "%$keyword%")
                ->orWhere('Address', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formtransaction = formTransaction::latest()->paginate($perPage);
        }

        return view('admin.form-transaction.index', compact('formtransaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.form-transaction.create');
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
        
        formTransaction::create($requestData);

        return redirect('admin/form-transaction')->with('flash_message', 'formTransaction added!');
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
        $formtransaction = formTransaction::findOrFail($id);

        return view('admin.form-transaction.show', compact('formtransaction'));
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
        $formtransaction = formTransaction::findOrFail($id);

        return view('admin.form-transaction.edit', compact('formtransaction'));
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
        
        $formtransaction = formTransaction::findOrFail($id);
        $formtransaction->update($requestData);

        return redirect('admin/form-transaction')->with('flash_message', 'formTransaction updated!');
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
        formTransaction::destroy($id);

        return redirect('admin/form-transaction')->with('flash_message', 'formTransaction deleted!');
    }
}
