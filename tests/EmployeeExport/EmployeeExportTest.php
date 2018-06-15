<?php

namespace Convenia\Dominio\EmployeeExport\Tests;

use Convenia\Dominio\EmployeeExport\EmployeeExport;

/**
 * Class EmployeeExportTest.
 */
class EmployeeExportTest extends BaseTest
{
    public function test_generate_file_to_import()
    {
        // Arrange
        $employeeExport = new EmployeeExport();

        // Act
        $fileContents = $employeeExport->employees([
            [
                'nome' => 'Vincent Vega',
            ],
            ])->generate();

        // Assert
        $this->stringContains('Vincent Vega', $fileContents);
    }
}
