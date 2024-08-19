<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingCreditValidationController extends Controller
{
    public function index()
    {
        $numberOfDays = [];
        for ($i = 5; $i <= 730; $i += 5) {
            $numberOfDays[] = $i;
        }
        $numbers = range(1, 200);
        return view('credit_validation.setting_credit_validations');
    }
}
