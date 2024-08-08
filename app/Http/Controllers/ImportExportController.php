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
        ]);

        $import = new ClientImport;
        Excel::import($import, request()->file('file'));
        // $typeOfData = $request->type_of_data;
        // Excel::toCollection(new ClientImport, $request->file('file')->store('temp'));
        dd('Import');
        // Excel::import(new ClientImport, $request->file('file')->store('temp'));
        return back();
    }
}
