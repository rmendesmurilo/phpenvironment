<?php
class Vehicle
{
    public $id;
    public $make;
    public $model;
    public $year;
    public $type;
    public $summary;
    public $msrp;
    public $image;

    public function __construct($id, $make, $model, $year, $type, $summary, $msrp, $image)
    {
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->type = $type;
        $this->summary = $summary;
        $this->msrp = $msrp;
        $this->image = $image;
    }


    /**
     * Get a vehicle from an array by the provided id
     * @param mixed $vehicles the vehicles array
     * @param mixed $id the vehicle id
     */
    public static function getVehicle($vehicles, $id){
        foreach($vehicles as $vehicle){
            if($vehicle->id == $id){
                return $vehicle;
        }
    }
}
}

?>