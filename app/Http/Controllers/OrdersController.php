<?php

namespace App\Http\Controllers;

use App\Orders;
use Laracasts\Flash\Flash;
use Request;
use League\Csv\Reader;
use League\Csv\Writer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use SplFileObject;

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
        $data = Orders::orderBy('id', 'desc')->get();
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
        $inputs = Request::only(['order_code','product','first_name','last_name','delivery_date','status']);

        $data = Orders::create($inputs);
        if (!$data) {
            Flash::overlay('There was an error in adding the offer. Contact the administrator', 'Error');
            return redirect('admin');
        }

        // cale fisier csv
        $fisier = storage_path() . '/databasefile.csv';
        unlink($fisier);
        // daca fisierul nu exista il creaza
        if (!file_exists($fisier)) {
            Writer::createFromPath(new SplFileObject($fisier, 'a+'), 'w');
        }


        // stocare in fisierul csv

        $toate_inregistrarile = Orders::all();
        // stocare in fisierul csv

        $writer = Writer::createFromPath(new SplFileObject($fisier));
        $writer->insertAll($toate_inregistrarile);

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
        $inputs = Request::only(['order_code','product','first_name','last_name','delivery_date','status']);
        $data = Orders::findOrFail($id);
        $data->update($inputs);
        // cale fisier csv

        $fisier = storage_path() . '/databasefile.csv';
        unlink($fisier);
        // daca fisierul nu exista il creaza
        if (!file_exists($fisier)) {
            Writer::createFromPath(new SplFileObject($fisier, 'a+'), 'w');
        }

        $toate_inregistrarile = Orders::all();
        // stocare in fisierul csv

        $writer = Writer::createFromPath(new SplFileObject($fisier));
        $writer->insertAll($toate_inregistrarile);

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
        // cale fisier csv
        $fisier = storage_path() . '/databasefile.csv';
        unlink($fisier);
        // daca fisierul nu exista il creaza
        if (!file_exists($fisier)) {
            Writer::createFromPath(new SplFileObject($fisier, 'a+'), 'w');
        }

        $toate_inregistrarile = Orders::all();


        // stocare in fisierul csv

        $writer = Writer::createFromPath(new SplFileObject($fisier));

        $writer->insertAll($toate_inregistrarile);

        Flash::overlay('You have deleted with succes the order', '');
        return redirect('admin');
    }

    public function search(Request $request)
    {
        $search = trim(Request::input('search'));

        if (empty($search)) {
            Flash::overlay('You must fill the search field with your order code', 'Error');
            return redirect('/');
        }

        $d = Orders::where('order_code', $search)->first();
        return view('results', compact('d'));

    }
}
