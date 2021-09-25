<?php

namespace App\Service;

use Illuminate\Http\Request;

interface TableService
{
    public function getAll();
    public function create(Request $request);
    public function delete($id);
    public function getByID($id);
    public function update($id, Request $request);
}
