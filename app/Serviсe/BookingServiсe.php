<?php

namespace App\Serviсe;

interface BookingServiсe
{
    public function getAll();
    public function create(array $data);
    public function delete($id);
    public function getByID($id);
    public function update($id,array $data);
    public function getAllSortByDayANDSortByTime();
    public function getAllByDay($day);
}
