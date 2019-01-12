<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//SERVICES
use App\Services\EquipmentService;

//REQUESTS
use App\Requests\EquipmentRequest;

class EquipmentController extends Controller
{

    private $equipmentService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }


    public function getAll()
    {

      $resourceOptions = $this->parseResourceOptions();

      //PARAMETROS DE PAGINACIÓN DEFAULT
      $resourceOptions['limit'] = !is_null($resourceOptions['limit']) ? $resourceOptions['limit'] : 10;
      $resourceOptions['sort'] = !empty($resourceOptions['sort']) ? $resourceOptions['sort'] : [array('key' => 'id', 'direction' => 'ASC')];

      $data = $this->equipmentService->getAll($resourceOptions);

      if(isset($resourceOptions['filter_groups']) && count($resourceOptions['filter_groups']) > 0){

        $count = $data->count();

      }else{

        $count = $this->equipmentService->getAll()->count();

      }

      $parsedData = $this->parseData($data, $resourceOptions, 'equipments');

      return $this->response([
        'data' => $parsedData,
        'recordsTotal' => $count,
      ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(EquipmentRequest $request)
    {

      $data = $request->post();
      return $this->response($this->equipmentService->create($data,201));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function getById($equipment_id)
     {
        $resourceOptions = $this->parseResourceOptions();
        $data = $this->equipmentService->getById($equipment_id, $resourceOptions);
        $parsedData = $this->parseData($data, $resourceOptions, 'equipment');
        return $this->response($parsedData);

     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $equipment_id)
    {
        $data = $request->post();

        return $this->response($this->equipmentService->update($equipment_id,$data));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delete($equipment_id)
     {
        return $this->response($this->equipmentService->delete($equipment_id));
     }
}
