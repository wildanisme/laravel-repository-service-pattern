<?php

namespace App\Services;

use App\Models\Employee;
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
        $id = $request->input('id');
        $address = $request->input('address');
        $position = $request->input('position');
        if ($id || $address || $position){
            $result = Employee::where('id', $id)
                                ->orWhere('position', $position)
                                ->orWhere('address', $address)
                                ->get();
            return [
                'message' => 'Employee Data',
                'status' => True,
                'data' => $result
            ];
        }
        $result = $this->repository->getAll($request);

        return [
            'message' => 'All Employee Data',
            'status' => True,
            'data' => $result
        ];
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
                'data' => $result,
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
