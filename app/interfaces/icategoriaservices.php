<?php

namespace App\Interfaces;

interface ICategoriaServices
{
    public function getAll();
    public function get(int $id);
    public function insert($obj);
    public function update($obj);
    public function delete(int $id);
}
