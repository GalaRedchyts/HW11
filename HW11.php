<?php
abstract class Delivery {
    abstract public function MachineSelection($car);

    public function delivery($car) {
        $order = $this->MachineSelection($car);
    }
}
class Economy extends Delivery {

   private int $price;
   private string $brand;

   public function __construct(int $price, string $brand) {
       $this->price = $price;
       $this->brand = $brand;
   }

    public function MachineSelection($car): Economy
    {
       return new Economy ($this->price, $this->brand);
    }
}

class Standard extends Delivery {
    private int $price;
    private string $brand;

    public function __construct(int $price, string $brand) {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function MachineSelection($car): Economy
    {
        return new Economy ($this->price, $this->brand);
    }
}

class Luxury extends Delivery {
    private int $price;
    private string $brand;

    public function __construct(int $price, string $brand) {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function MachineSelection($car): Economy
    {
        return new Economy ($this->price, $this->brand);
    }
}
interface CompleteTheOrder {

    public function order(): string;
}
class Economy implements CompleteTheOrder {

    public function order(): string
    {
        return "{Complete the order}";
    }
}
class Standard implements CompleteTheOrder {

    public function order(): string
    {
        return "{Complete the order}";
    }
}
class Luxury implements CompleteTheOrder {

    public function order(): string
    {
        return "{Complete the order}";
    }
}
 function clientCode (Delivery $car)
 {
     $car->MachineSelection($car);
 }

 clientCode(new Economy());

clientCode(new Standard());

clientCode(new Luxury());

