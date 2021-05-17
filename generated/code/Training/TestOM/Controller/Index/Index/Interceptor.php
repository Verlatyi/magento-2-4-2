<?php
namespace Training\TestOM\Controller\Index\Index;

/**
 * Interceptor class for @see \Training\TestOM\Controller\Index\Index
 */
class Interceptor extends \Training\TestOM\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Training\TestOM\Model\Test $testModel)
    {
        $this->___init();
        parent::__construct($testModel);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
