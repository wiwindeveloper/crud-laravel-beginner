<?php

namespace App\Http\Controllers;

use App\Nrp;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class AutoDataController extends Controller
{
    public function index()
    {
        return view('autodata');

        // $valueofnrpcode = '120010264';

        // $resultdata = Nrp::where('nrps.nrp', $valueofnrpcode)
        //         ->leftJoin('students', 'nrps.nrp', '=', 'students.nrp')
        //         ->select('nrps.*', 'students.nama as nama', 'students.email as email')->get();
            
        //         return response()->json($resultdata);
    }

    public function fetshautocomplete(Request $request)
    {
        if($request->get('query')){
            $query = $request->get('query');
            // $data = DB::table('nrps')
            //     ->where('nrp', 'like', '%'.$query.'%')->get();

            $data = Nrp::query()
                ->where('nrp', 'LIKE', '%'.$query.'%')
                ->get();

            $output = '<ul class="dropdown-menu" style="display:block;position:absolute;">';
                foreach($data as $row){
                    $output .= '<li><a class="dropdown-item" href="#">'.$row->nrp.'</a></li>';
                }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function fetchotherdata(Request $request)
    {
        if($request->get('valueofnrpcode'))
        {
            $valueofnrpcode = $request->get('valueofnrpcode');
            // $resultdata = DB::table('nrps')
            //      ->leftJoin('students', 'nrps.nrp', '=', 'students.nrp')
            //      ->select('nrps.*', 'students.nama as nama', 'students.email as email')
            //      ->where('nrps.nrp', 'like', '%'.$valueofnrpcode.'%')->get();

            $resultdata = Nrp::where('nrps.nrp', $valueofnrpcode)
                ->leftJoin('students', 'nrps.nrp', '=', 'students.nrp')
                ->select('nrps.*', 'students.nama as nama', 'students.email as email')->get();
            
                return response()->json($resultdata);
            //echo 'ambil query';
        }
        
    }
}
