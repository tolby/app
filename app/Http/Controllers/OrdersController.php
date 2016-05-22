<?php

namespace App\Http\Controllers;

use App\Orders;
use Laracasts\Flash\Flash;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Orders::orderBy('id', 'desc')->paginate();
        return view('admin.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = Request::all();

        $data = Orders::create($inputs);
        if (!$data) {
            Flash::overlay('There was an error in adding the offer. Contact the administrator', 'Error');
            return redirect('admin');
        }
        Flash::overlay('You have added the order with success', 'Success');
        return redirect('admin');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Orders::findOrFail($id);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $inputs = Request::all();
        $data = Orders::findOrFail($id);
        $data->update($inputs);
        Flash::overlay('You have updated with success the order', 'Success');
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Orders::findOrFail($id);
        $data->delete();
        Flash::overlay('You have deleted with succes the order', '');
        return redirect('admin');
    }
}
