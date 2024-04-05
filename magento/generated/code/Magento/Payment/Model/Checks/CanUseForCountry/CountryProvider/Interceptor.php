<?php
namespace Magento\Payment\Model\Checks\CanUseForCountry\CountryProvider;

/**
 * Interceptor class for @see \Magento\Payment\Model\Checks\CanUseForCountry\CountryProvider
 */
class Interceptor extends \Magento\Payment\Model\Checks\CanUseForCountry\CountryProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Directory\Helper\Data $directoryHelper)
    {
        $this->___init();
        parent::__construct($directoryHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountry(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountry');
        return $pluginInfo ? $this->___callPlugins('getCountry', func_get_args(), $pluginInfo) : parent::getCountry($quote);
    }
}
