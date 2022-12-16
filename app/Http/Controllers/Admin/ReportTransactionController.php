<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\UtilityStock;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = DB::table('LaporanRataRataJumlahSnackDibeli');
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $result = $query->where('Kota', 'LIKE', "%$keyword%")
                ->orWhere('ProductName', 'LIKE', "%$keyword%")
                ->orWhere('Kategori', 'LIKE', "%$keyword%")
                ->orWhere('Kurir', 'LIKE', "%$keyword%")
                ->orWhere('Kota', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $result = $query->paginate($perPage);
        }
        return view('admin.report-transaction.index', compact('result'));
    }

    public function pdf(){
        $result = DB::table('LaporanRataRataJumlahSnackDibeli')->get();
        $pdf = Pdf::loadView('admin.report-transaction.pdf', compact('result'));
        return $pdf->download('report.pdf');
    }
}
