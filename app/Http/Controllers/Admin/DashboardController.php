<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Tagihan;
use App\Models\Pembayaran;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Chart\YearlyEarnings;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * Controller ini digunakan untuk menampilkan histori pembayaran terbaru,
 * melihat jumlah pendapatan, total pembayaran, tagihan listrik lunas,
 * dan tagihan listrik belum lunas
 */
class DashboardController extends BaseController
{
    /**
     * Method ini digunakan untuk menampilkan halaman dashboard admin
     */
    public function index(Request $request)
    {
        //Hitung total pendapatan
        $pembayaran = Tagihan::where('status', '1')->get();
        $totalPendapatan = $pembayaran->sum('jumlah_bayar');
        $totalPendapatan = 'Rp '. number_format($totalPendapatan, 2, ',', '.');

        $bills = Tagihan::get();

        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $data = [];
        foreach ($months as $index => $month) {
            $data[$index] = Tagihan::where('status', '1')
                                   ->whereYear('created_at', now()->year)
                                   ->whereMonth('created_at', $index)
                                   ->get()
                                   ->sum('jumlah_bayar');
        }

        $chart = new YearlyEarnings;
        $chart->title('Pendapatan Tahun '.now()->year);
        $chart->labels($months);
        $chart->dataset('Pendapatan Tahun '. now()->year, 'line', $data);
        $chart->options([
                            'maintainAspectRatio' => false,
                            'borderColor'=>'rgb(75, 192, 192)',
                            'scales' => ['y' => 
                                [
                                    'min' => 0,
                                ]
                            ]
                        ], true);
        return view('pages.admin.index', compact('totalPendapatan', 'bills', 'pembayaran', 'chart'));
    }

    /**
     * Method untuk mengatur tampilan dashboard
     */
    public function settings(Request $request)
    {
        return view('pages.admin.settings');
    }
}
