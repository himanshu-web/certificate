<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\RecordImport;
use App\Models\Record;
use Excel;
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

           $datas = Excel::toCollection(new RecordImport,$request->file('uploadImport'));
        foreach($datas as $data){
            foreach ($data as $value) {
                $recordData = [
                    'sno'                               => $value['sno'],
                    'name_of_offician'                  => $value['name_of_offician'],
                    'designation'                       => $value['designation'],
                    'department'                        => $value['department'],
                    'date'                              => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value['date'])->format('Y-m-d'),
                    'marks'                             => $value['marks'],
                    'performance'                       => $value['performance'],
                    'mobile'                            => $value['mobile'],
                ];
                Record::create($recordData);
                return back()->with('message','Uploaded Successfull');
            }
        }
    }

    public function show_certificate(Request $request,$id)
    {
        $data = Record::where('id',$request->id)->first();
        return view('Admin.Header.generate',$data);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Record::findOrFail($id)->delete();
        return back()->with('message','deleted successfull');
    }
}
