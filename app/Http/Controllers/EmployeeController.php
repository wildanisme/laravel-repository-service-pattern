<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Services\EmployeeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @param EmployeeService $service
     */
    public function __construct(EmployeeService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $result = $this->service->getAllEmployee($request);

        return response()->json($result);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $result = $this->service->getById($id);
        return response()->json([
            'message' => 'Detail data pegawai',
            'status' => True,
            'data' => $result
        ], 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): jsonResponse
    {
        $result = $this->service->createData($request);
        return response()->json($result, 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $id, Request $request): JsonResponse
    {
        $result = $this->service->updateData($id, $request);

        return response()->json($result, 200);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $result = $this->service->deleteData($id);
        return response()->json($result, 204);
    }

}
