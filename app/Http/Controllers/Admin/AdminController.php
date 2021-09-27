<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\RecordImport;
use Excel;
use App\Models\Record;
class AdminController extends Controller
{
    
    public function dashboard()
    {
        return "Dashboard";

        return view('Admin.FAQ.faq_index'); 
    }

    public function record()
    {
        $data =Record::orderBy('id', 'desc')->get();
        
        return view('Admin.Header.h_d_index',compact('data'));
    }

    public function importRecord(Request $request){
            // dd($request->all());

           $datas = Excel::toCollection(new RecordImport,$request->file('uploadImport'));
        foreach($datas as $data){
            foreach ($data as $value) {
                $recordData = [
                    'sno'                               => $value['sno'],
                    'name_of_offician'                  => $value['name_of_offician'],
                    'designation'                       => $value['designation'],
                    'department'                        => $value['department'],
                    'section'                           => $value['section'],
                    'e_office_trainning_attended_yn'    => $value['e_office_trainning_attended_yn'],
                    'digital_certificate_no'            => $value['digital_certificate_no'],
                    'marks'                             => $value['marks'],
                    'date'                              => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value['date'])->format('Y-m-d'),
                ];
                Record::create($recordData);
                return back()->with('success','Uploaded Successfull');
            }
        }
        // return $recordData;
    }

    public function show_certificate(Request $request)
    {
        // return $request->id;
       $data = Record::where('id',$request->id)->first();

        return view('Admin.Header.generate',$data);

    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
