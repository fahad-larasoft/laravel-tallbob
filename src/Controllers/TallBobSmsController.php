<?php

namespace Larasoft\TallBobSms\Controllers;


use Illuminate\Http\Request;

/**
 * Class TallBobSmsController
 *
 * Controller to handle webhook requests
 *
 * @package Larasoft\TallBobSms\Controllers
 *
 * @author Fahad Ali <fahad@llarasoft.io>
 */
class TallBobSmsController extends Controller
{
    /**
     * Method to handle webhook request and manage data
     *
     * @param Request $request
     */
    public function webhook(Request $request)
    {
        info(json_encode($request->all()));
    }
}
