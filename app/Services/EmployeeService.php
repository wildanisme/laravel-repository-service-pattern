<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class EmployeeService
{
    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllEmployee(Request $request)
    {
        return $this->repository->getAll($request);
    }

    public function getById(int $id)
    {
        return $this->repository->getById($id);
    }

    public function createData(Request $request)
    {
        try{
            $result = $this->repository->createData($request->all());

            return [
                'message' => 'Create Data',
                'status' => True,
                'data' => $result
            ];
        } catch (\Throwable $throwable){
            return [
                'message' => $throwable->getMessage(),
                'status' => False,
                'data' => null
            ];
        }
    }
    public function updateData(int $id, Request $request)
    {
        try{
            $result = $this->repository->updateData($id, $request->all());
            return [
                'message' => 'Data Updated',
                'status' => True,
                'data' => $result,
            ];
        } catch (\Throwable $throwable){
            return [
                'message' => $throwable->getMessage(),
                'status' => False,
                'data' => null,
            ];
        }
    }


    public function deleteData(int $id)
    {
        try{
            $result = $this->repository->deleteData($id);
            return[
                'message' => 'Data Deleted',
                'status' => True,
                'data' => null,
            ];
        } catch (\Throwable $throwable){
            return [
                'message' => $throwable->getMessage(),
                'status' => False,
                'data' => null
            ];
        }
    }

}
