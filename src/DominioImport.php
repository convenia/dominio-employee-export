<?php

namespace Convenia\DominioImport;
use Convenia\DominioImport\Registries\EmployeeRegistry;

/**
 * Class DominioImport
 */
class DominioImport
{
    /**
     * @var array
     */
    protected $employees = [];

    /**
     * @param array $employeesData
     *
     * @return $this
     */
    public function employees(array $employeesData)
    {
        foreach ($employeesData as $employee) {
            $this->employees[] = new EmployeeRegistry($employee);
        }

        return $this;
    }

    /**
     *
     * @return string
     */
    public function generate()
    {
        $returnString = '';

        foreach ($this->employees as $employee) {
            $returnString .= $employee;
        }
        return $returnString;
    }
}
