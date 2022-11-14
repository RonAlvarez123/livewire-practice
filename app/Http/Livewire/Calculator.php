<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public $operation = '+';
    public $result = 0;
    public $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $num1 = floatval($this->num1);
        $num2 = floatval($this->num2);

        switch ($this->operation) {
            case '+':
                $this->result = $num1 + $num2;
                break;
            case '-':
                $this->result = $num1 - $num2;
                break;
            case '*':
                $this->result = $num1 * $num2;
                break;
            case '/':
                $this->result = $num1 / $num2;
                break;
            case '%':
                $this->result = $num1 % $num2;
                break;
        }
    }

    public function updated($property)
    {
        if ($this->num1 == '' || $this->num2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}
