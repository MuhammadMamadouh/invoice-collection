<?php

namespace App\Http\Controllers;

use App\Enum\ExcelDataType;
use App\Imports\ClientImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{

    public function importExportView()
    {
        $ExcelItemTypes = ExcelDataType::getValues();
        return view('import-export.import-export', compact('ExcelItemTypes'));
    }

    public function export()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request){

        $data = $request->validate([
            'file' => 'required|file',
            'type_of_data' => 'required|in:'.implode(',', ExcelDataType::toArray())
        ]);

        $import = ExcelDataType::getExcelClass($data['type_of_data']);

        // try {
            Excel::import($import, request()->file('file'));
        // } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
        //     $failures = $e->failures();
        //     foreach ($failures as $failure) {
        //         $failure->row(); // row that went wrong
        //         $failure->attribute(); // either heading key (if using heading row concern) or column index
        //         $failure->errors(); // Actual error messages from Laravel validator
        //         $failure->values(); // The values of the row that has failed.
        //     }
        // }
        return back();
    }
}
