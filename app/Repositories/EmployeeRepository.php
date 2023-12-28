<?php

namespace App\Repositories;

use App\Contracts\EmployeeInterface;
use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class EmployeeRepository implements EmployeeInterface
{
    public function getAll(Request $request)
    {
        // TODO: Implement getAll() method.
        $id = $request->input('id');
        $position = $request->input('position');
        if ($id || $position){
            return Employee::where('id', $id)->orWhere('position', $position)->get();
        }
//
        return Employee::all();
    }

    public function getById(int $id)
    {
        // TODO: Implement getPegawaiDetail() method.
        $result = Employee::find($id);

        return $result;
    }

    public function createData($data)
    {
        // TODO: Implement createData() method.
        return Employee::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'position' => $data['position']
        ]);
    }

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

    public function deleteData(int $id)
    {
        // TODO: Implement deleteData() method.
        $result = Employee::find($id);
        return $result->delete();
    }

}
