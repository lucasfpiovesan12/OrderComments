<?php
namespace PalacioDasFerramentas\OrderComments\Model;
 
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class AdditionalConfigVars
 * @package PalacioDasFerramentas\OrderComments\Model
 */
class AdditionalConfigVars implements ConfigProviderInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    const PATH_PALACIO_ORDER_COMMENTS = 'palacio_order_comments/general/enable';

    /**
     * AdditionalConfigVars constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return array|mixed
     */
    public function getConfig()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $enabledComments = $this->scopeConfig->getValue(self::PATH_PALACIO_ORDER_COMMENTS, $storeScope);

        if ($enabledComments) {
            $additionalVariables['enabled_comments'] = true;
        } else {
            $additionalVariables['enabled_comments'] = false;
        }
        
        return $additionalVariables;
    }
}
