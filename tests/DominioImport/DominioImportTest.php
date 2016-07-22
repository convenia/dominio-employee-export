<?php

namespace Convenia\DominioImport\Tests;

use Convenia\DominioImport\DominioImport;

/**
 * Class DominioImport
 */
class DominioImportTest extends BaseTest
{
    public function test_generate_file_to_import()
    {
        $dominioImport = new DominioImport;

        $fileContents = $dominioImport
                    ->employees([
                        [
                            'name' => 'Vincent Vega'
                        ]
                    ])
                    ->generate();

        $this->assertEquals(
            '                            Vincent Vega                                                          ',
            $fileContents
        );
    }
}
