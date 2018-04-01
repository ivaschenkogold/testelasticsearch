<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {

            $accounts = Account::search($request->input('search'))->take(100)->get();
        }
        return view('search.results', compact('accounts'));
    }

    public function index()
    {
        /*for ($i = 0; $i < 1000; $i++) {
            $account = new Account();
            $account->name = 'account' . $i;
            $account->user_id = 1;
            $account->save();
        }*/
        return view('welcome');

    }
}
