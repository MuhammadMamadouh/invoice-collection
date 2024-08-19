<?php

namespace App\Http\Controllers;

use App\Models\SettingCreditValidation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SettingCreditValidationController extends Controller
{
    public function index()
    {

        return view('credit_validation.setting_credit_validations');
    }


}
