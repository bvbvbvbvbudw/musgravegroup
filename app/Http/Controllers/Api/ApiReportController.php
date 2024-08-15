<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ApiReportController extends Controller
{
    public function get(Request $request)
    {
        $perPage = 6;
        $reports = Report::with(['media', 'file'])->paginate($perPage);

        return response()->json($reports, 200);
    }
}
