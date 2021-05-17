<?php

namespace Learn\Custom\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }
    public function execute()
    {
        echo "some text";

        echo $this->someFunc(5);
    }

    public function someFunc($val)
    {
        if ($val > 0){
            $result = $val * 30;
        } else {
            $result = 0;
        }

        return $result;
    }
}
