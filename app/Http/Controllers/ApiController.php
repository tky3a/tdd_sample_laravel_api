<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCustomers(): JsonResponse
    {
        return response()->json(Customer::query()
            ->select('id', 'name')
            ->get());
    }

    public function postCustomers(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required']
        );
        $customer = new Customer();
        $customer->name = $request->json('name');
        $customer->save();
    }

    public function getCustomer()
    {
    }

    public function putCustomer()
    {
    }

    public function deleteCustomer()
    {
    }

    public function getReports()
    {
    }

    public function postReports()
    {
    }

    public function getReport()
    {
    }

    public function putReport()
    {
    }

    public function deleteReport()
    {
    }
}
