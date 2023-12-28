<?php

namespace App\Repositories;

use App\Contracts\EmployeeInterface;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class EmployeeRepository implements EmployeeInterface
{
    /**
     * @param Request $request
     * @return Collection
     */
    public function getAll(Request $request)
    {
        // TODO: Implement getAll() method.

        return Employee::all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        // TODO: Implement getPegawaiDetail() method.
        $result = Employee::find($id);

        return $result;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createData($data)
    {
        // TODO: Implement createData() method.
        return Employee::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'position' => $data['position']
        ]);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function updateData(int $id, array $data)
    {
        // TODO: Implement updateData() method.

        $result = Employee::find($id);
        return $result->update([
            'name' => $data['name'],
            'address' => $data['address'],
            'position' => $data['position']
        ]);

    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteData(int $id)
    {
        // TODO: Implement deleteData() method.
        $result = Employee::find($id);
        return $result->delete();
    }

}
