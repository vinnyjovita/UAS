<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formtransaction_detail;
use Illuminate\Http\Request;

class formtransaction_detailController extends Controller
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
            $formtransaction_detail = formtransaction_detail::where('Productid', 'LIKE', "%$keyword%")
                ->orWhere('Transactionnumber', 'LIKE', "%$keyword%")
                ->orWhere('Qty', 'LIKE', "%$keyword%")
                ->orWhere('Price', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formtransaction_detail = formtransaction_detail::latest()->paginate($perPage);
        }

        return view('formtransaction_detail.index', compact('formtransaction_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('formtransaction_detail.create');
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
        
        formtransaction_detail::create($requestData);

        return redirect('admin/formtransaction_detail')->with('flash_message', 'formtransaction_detail added!');
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
        $formtransaction_detail = formtransaction_detail::findOrFail($id);

        return view('formtransaction_detail.show', compact('formtransaction_detail'));
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
        $formtransaction_detail = formtransaction_detail::findOrFail($id);

        return view('formtransaction_detail.edit', compact('formtransaction_detail'));
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
        
        $formtransaction_detail = formtransaction_detail::findOrFail($id);
        $formtransaction_detail->update($requestData);

        return redirect('admin/formtransaction_detail')->with('flash_message', 'formtransaction_detail updated!');
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
        formtransaction_detail::destroy($id);

        return redirect('admin/formtransaction_detail')->with('flash_message', 'formtransaction_detail deleted!');
    }
}
