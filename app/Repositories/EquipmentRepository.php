<?php

namespace App\Repositories;

use Optimus\Genie\Repository;

use App\Models\Equipment;

class EquipmentRepository extends Repository
{
    protected function getModel()
    {
        return new Equipment;
    }

    public function create(array $data){

      $equipment = $this->getModel();
      $equipment->fill($data);
      $equipment->save();

      return $equipment;

    }

    public function update(Equipment $equipment, $data)
    {

      $equipment->fill($data);
      $equipment->save();
      return $equipment;

    }
}
