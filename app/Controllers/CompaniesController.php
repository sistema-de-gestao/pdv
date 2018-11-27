<?php

namespace app\Controllers;

use app\Models\Companies;

class CompaniesController
{
    private $model;

    public function __construct()
    {
        $this->model = new Companies();
    }

    public function Select($col)
    {
        $result = $this->model->Select('1');
        $row = $result->fetch_assoc();
        return $row["$col"];
    }
}
