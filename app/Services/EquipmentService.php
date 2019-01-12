<?php

namespace App\Services;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Events\Dispatcher;

//REPOSITORIES
use App\Repositories\EquipmentRepository;

//EXCEPTIONS
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class EquipmentService
{
  private $database;
  private $dispatcher;
  private $equipmentRepository;

  public function __construct(
      DatabaseManager $database,
      Dispatcher $dispatcher,
      EquipmentRepository $equipmentRepository
  ){
      $this->database = $database;
      $this->dispatcher = $dispatcher;
      $this->equipmentRepository = $equipmentRepository;
  }

  public function getAll($options = [])
  {
      return $this->equipmentRepository->get($options);
  }

  public function create($data,$user)
  {

      $this->database->beginTransaction();

      try {

          $equipment = $this->equipmentRepository->create($data,$user);


      } catch (Exception $e) {

          $this->database->rollBack();

          throw $e;
      }

      $this->database->commit();

      return $equipment;
  }

  public function getById($equipment_id, array $options = [])
  {
      $equipment = $this->getRequestedEquipment($equipment_id,$options);

      return $equipment;
  }

  private function getRequestedEquipment($equipment_id, array $options = [])
  {

      $equipment = $this->equipmentRepository->getById($equipment_id, $options);

      if (is_null($equipment)) {
            throw new UnprocessableEntityHttpException("PERMISO DENEGADO");
        }

      return $equipment;
  }

  public function update($equipment_id,$data)
  {

    $this->database->beginTransaction();

    try {

        $equipment = $this->getRequestedEquipment($equipment_id);
        $equipment =  $this->equipmentRepository->update($equipment,$data);

    } catch (Exception $e) {

        $this->database->rollBack();

        throw $e;
    }

    $this->database->commit();

    return $equipment;

  }

  public function delete($equipment_id)
  {

    $equipment = $this->getRequestedEquipment($equipment_id);

    $this->database->beginTransaction();

    try {

      $this->equipmentRepository->delete($equipment_id);

    }catch (Exception $e) {

        $this->database->rollBack();

        throw $e;
    }

    $this->database->commit();

  }


}
