<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Admin Color
        $data ['frame1'] = file_get_contents('http://10.166.158.123/stat/consumables.php');
        $data['frame1'] = str_replace('src="','src="http://10.166.158.123', $data['frame1']);

        // HR COLOR
        $data ['frame2'] = file_get_contents('http://10.166.158.13/status/consumables.php?');
        $data['frame2'] = str_replace('src="','src="http://10.166.158.13', $data['frame2']);
        // CSTI-ProcCtrl
        $data ['frame3'] = file_get_contents('http://10.166.158.113/status/consumables.php');
        $data['frame3'] = str_replace('src="','src="http://10.166.158.113', $data['frame3']);
        // CSTI-Eng
        $data ['frame4'] = file_get_contents('http://10.166.158.115/status/consumables.php');
        $data['frame4'] = str_replace('src="','src="http://10.166.158.115', $data['frame4']);
        // OT-KavAdmin
        $data ['frame5'] = file_get_contents('http://10.166.158.116/stat/consumables.php');
        $data['frame5'] = str_replace('src="','src="http://10.166.158.116', $data['frame5']);

        // CSTI-Shipping
        $data ['frame6'] = file_get_contents('http://10.166.158.112/stat/consumables.php');
        $data['frame6'] = str_replace('src="','src="http://10.166.158.112', $data['frame6']);

        // // CSTI-Planning
        $data ['frame7'] = file_get_contents('http://10.166.158.109/stat/consumables.php');
        $data['frame7'] = str_replace('src="','src="http://10.166.158.109', $data['frame7']);

        // CSTI-PAYROLL
        $data ['frame8'] = file_get_contents('http://10.166.158.124/status/consumables.php');
        $data['frame8'] = str_replace('src="','src="http://10.166.158.124', $data['frame8']);
        // CSTI-KIMProd
        $data ['frame9'] = file_get_contents('http://10.166.158.108/stat/consumables.php');
        $data['frame9'] = str_replace('src="','src="http://10.166.158.108', $data['frame9']);

        //        // CSTI-KAVSouth
        $data ['frame10'] = file_get_contents('http://10.166.158.121/stat/consumables.php');
        $data['frame10'] = str_replace('src="','src="http://10.166.158.121', $data['frame10']);

        // CSTI-KAVProd
        $data ['frame11'] = file_get_contents('http://10.166.158.90/stat/consumables.php');
        $data['frame11'] = str_replace('src="','src="http://10.166.158.90', $data['frame11']);

        // CSTI-Warehouse
        $data ['frame12'] = file_get_contents('http://10.166.158.103/stat/consumables.php');
        $data['frame12'] = str_replace('src="','src="http://10.166.158.103', $data['frame12']);

        
        // Kiosko RH
        // $data ['frame13'] = file_get_contents('http://10.166.158.122');
        // $data['frame13'] = str_replace('src="','src="http://10.166.158.122/home/index.html#', $data['frame13']);

        //           // Manager
//        $data ['frame14'] = file_get_contents('http://10.166.158.110/');
//        $data['frame14'] = str_replace('src="','src="http://10.166.158.110', $data['frame14']);



        return view('dashboard.consumables',$data);
    }

    public function contadores(){

        // Admin Color
        $data ['frame1'] = file_get_contents('http://10.166.158.123/counters/billing_info.php');
        $data['frame1'] = str_replace('src="','src="http://10.166.158.123', $data['frame1']);
        // HR COLOR
        $data ['frame2'] = file_get_contents('http://10.166.158.13/counters/billing_info.php');
        $data['frame2'] = str_replace('src="','src="http://10.166.158.13', $data['frame2']);
        // CSTI-ProcCtrl
        $data ['frame3'] = file_get_contents('http://10.166.158.113/counters/billing_info.php');
        $data['frame3'] = str_replace('src="','src="http://10.166.158.113', $data['frame3']);
        // CSTI-Eng
        $data ['frame4'] = file_get_contents('http://10.166.158.115/counters/billing_info.php');
        $data['frame4'] = str_replace('src="','src="http://10.166.158.115', $data['frame4']);
        // OT-KavAdmin
        $data ['frame5'] = file_get_contents('http://10.166.158.116/counters/billing_info.php');
        $data['frame5'] = str_replace('src="','src="http://10.166.158.116', $data['frame5']);

        //            // CSTI-Shipping
        $data ['frame6'] = file_get_contents('http://10.166.158.112/counters/billing_info.php');
        $data['frame6'] = str_replace('src="','src="http://10.166.158.112', $data['frame6']);

        // CSTI-Planning
        $data ['frame7'] = file_get_contents('http://10.166.158.109/counters/billing_info.php');
        $data['frame7'] = str_replace('src="','src="http://10.166.158.109', $data['frame7']);

        // CSTI-PAYROLL
        $data ['frame8'] = file_get_contents('http://10.166.158.124/counters/billing_info.php');
        $data['frame8'] = str_replace('src="','src="http://10.166.158.124', $data['frame8']);
        // CSTI-KIMProd
        $data ['frame9'] = file_get_contents('http://10.166.158.108/counters/billing_info.php');
        $data['frame9'] = str_replace('src="','src="http://10.166.158.108', $data['frame9']);

        // CSTI-KAVSouth
        $data ['frame10'] = file_get_contents('http://10.166.158.121/counters/billing_info.php');
        $data['frame10'] = str_replace('src="','src="http://10.166.158.121', $data['frame10']);

        // CSTI-KAVProd
        $data ['frame11'] = file_get_contents('http://10.166.158.90/counters/billing_info.php');
        $data['frame11'] = str_replace('src="','src="http://10.166.158.90', $data['frame11']);

        // CSTI-Warehouse
        $data ['frame12'] = file_get_contents('http://10.166.158.103/counters/billing_info.php');
        $data['frame12'] = str_replace('src="','src="http://10.166.158.103', $data['frame12']);

        //                  // CustomerServices
        // $data ['frame13'] = file_get_contents('http://10.166.158.104/prbillinfo.htm#');
        // $data['frame13'] = str_replace('src="','src="http://10.166.158.104', $data['frame13']);

//                    //Kiosko RH
//          $data ['frame13'] = file_get_contents("http://10.166.158.122/");
//          $data['frame13'] = str_replace('src="','src="http://10.166.158.122', $data['frame13']);

        // //           // Manager
        // // $data ['frame14'] = file_get_contents('http://10.166.158.110');
        // // $data['frame14'] = str_replace('src="','src="http://10.166.158.110', $data['frame14']);


        return view('dashboard.counter-print', $data);

    }
}
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
//}
