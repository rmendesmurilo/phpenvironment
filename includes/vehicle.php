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
}

?>