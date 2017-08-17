<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\AcceptanceTestFramework\Test;

use Magento\AcceptanceTestFramework\Config\DataInterface;

/**
 * Class TestDataParser
 */
class TestDataParser
{
    /**
     * TestDataParser constructor.
     * @param DataInterface $testData
     */
    public function __construct(DataInterface $testData)
    {
        $this->testData = $testData;
    }

    /**
     * Returns test data.
     *
     * @return array|null
     */
    public function readTestData()
    {
        return $this->testData->get();
    }
}
