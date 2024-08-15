<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewsSustainability;
use App\Models\Report;
use Illuminate\Http\Request;

class ApiNewsSustainabilityController extends Controller
{
    public function get(Request $request)
    {
        $perPage = 6;
        $reports = NewsSustainability::with(['media', 'content'])->paginate($perPage);

        return response()->json($reports, 200);
    }
}
