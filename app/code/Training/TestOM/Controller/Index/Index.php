<?php

namespace Training\TestOM\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Training\TestOM\Model\Test;

class Index implements HttpGetActionInterface
{
    private $testModel;

    public function __construct(Test $testModel)
    {
        $this->testModel = $testModel;
    }

    public function execute()
    {
        $this->testModel->log();

        exit();
    }
}
