<?php

namespace App\Contracts;



use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

interface EmployeeInterface
{
    public function getAll(Request $request);
    public function getById(int $id);
    public function createData(array $data);
    public function updateData(int $id, array $data);
    public function deleteData(int $id);
}
