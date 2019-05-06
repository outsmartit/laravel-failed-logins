<?php


namespace Outsmartit\Failedlogins;


use App\Http\Controllers\Controller;


class FailedLoginsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $failedlogins = \Outsmartit\Failedlogins\FailedLoginAttempt::orderByDesc('created_at')->limit(config('failedlogins.list_max'))->get();
        return view('failedlogins::index', compact('failedlogins'));
    }
}