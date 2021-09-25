<?php


namespace App\Service;


use App\Models\Table;
use Illuminate\Http\Request;

class TableServiceImp implements TableService
{

    public function getAll()
    {
        return Table::all();
    }

    public function create(Request $request)
    {
        $table = new Table;
        $table->count = $request['count'];
        $table->status = $request['status'];
        $table->save();
    }

    public function delete($id)
    {
        Table::all()->find($id)->delete();
    }

    public function getByID($id)
    {
        return Table::all()->find($id);
    }

    public function update($id, Request $request)
    {
        $table = (new Table)::all()->find($id);
        $table->count = $request['count'];
        $table->status = $request['status'];
        $table->save();
    }
}
