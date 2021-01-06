<?php
interface VehicleAbilities{
    //вкл.выкл двигатель
    public function startEngine();
    public function stopEngine();
    //двигаться вперёд-назад
    public function moveForward();
    public function moveBackwards(); 
    public function getEngineStatus(); 
}

interface WeelVehicleAbilities
{
    //Гудок
    public function honk();
}

interface CatterpillarVehicleAbilities
{
    //Поворот вокруг оси
    public function rotate();
}
//базовый класс для средств передвижения
abstract class Vehicles implements VehicleAbilities
{
    //состояние двигаетеля вкл=true/выкл=false
    private bool $engineState;

    public function startEngine()
    {
        $this->engineState=true;
        echo 'Двигатель заведён</br>';
    }

    public function stopEngine()
    {
        $this->engineState=false;
        echo 'Двигатель заглушен</br>';
    }

    public function moveForward()
    {
        echo 'Еду вперёд</br>';
    }
    public function moveBackwards()
    {
        echo 'Еду назад</br>';        
    }  

    public function getEngineStatus():bool
    {
        echo "Текущий статус двигателя".$this->engineState.'</br>';
        return $this->engineState;
    }  

    public function __construct()    
    {       
        $this->engineState = false;      
    }
}

abstract class WheelVehicle extends Vehicles implements WeelVehicleAbilities
{
    protected string $honksound;

    public function honk()
    {
        if (isset($this->honksound)) echo $this->honksound.'</br>';
        else echo 'Гудок сломался</br>';
    }
}

class Automobile extends WheelVehicle
{
    protected string $honksound = 'beeep';
}

class Truck extends WheelVehicle
{
    protected string $honksound = 'tuuuutuuut';
}

abstract class CaterpillarVehicle extends Vehicles implements CatterpillarVehicleAbilities
{
    public function rotate()
    {
        echo 'Вращаюсь</br>';
    }
}

class CaterpillarCrane extends CaterpillarVehicle
{    
}

