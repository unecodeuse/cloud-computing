<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
 function dash(){
    $totadmin=DB::table('admins')
    ->select(DB::raw('count(id) as totid'))
    ->get();
    $totavocat=DB::table('avocats')
    ->select(DB::raw('count(id) as totid'))
    ->get();
    $totimmeuble=DB::table('immeubles')
    ->select(DB::raw('count(id) as totid'))
    ->get();
    $totclient=DB::table('clients')
    ->select(DB::raw('count(id) as totid'))
    ->get();
    return view('admin.dashboard',compact('totadmin','totavocat','totimmeuble','totclient'));
  }
    
}
