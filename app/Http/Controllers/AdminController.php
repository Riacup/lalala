<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Companies;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $years = User::selectRaw('YEAR(created_at) as year')
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();
        return view('dashboard_admin/admin', compact('years'));
    }
    public function user_register(){
        if(isset($_GET['year'])){
            $year = $_GET['year'];
             
        } else {
            $year = date('Y');
        }
        
        $monthGroup = ['01','02','03','04','05','06','07','08','09','10','11','12'];

        foreach ($monthGroup as $month){
            $user = User::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
            
            $thisMonth[] = $month;
            $total[] = $user;
        }

        return response()->json([
            'status'=>'success',
            'bulan'=>$thisMonth,
            'in'=>$total,
          ]);
        
    }

    public function data(){
        $data = User::where('id','=',Auth::user()->id)->get();
        
        return view ('dashboard_admin.profileAdmin', compact('data'));
    }
}
