<?php

namespace App\Serviсe;

interface DishesGroupServiсe
{
    public function getAll();
    public function create(array $data);
    public function delete($id);
    public function getByID($id);
    public function update($id,array $data);
}
