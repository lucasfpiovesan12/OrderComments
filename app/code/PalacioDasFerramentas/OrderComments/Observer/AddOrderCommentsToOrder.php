<?php
namespace PalacioDasFerramentas\OrderComments\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

/**
 * Class AddOrderCommentsToOrder
 * @package PalacioDasFerramentas\OrderComments\Observer
 */
class AddOrderCommentsToOrder implements ObserverInterface
{
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        
        $order->setData('palacio_order_comments', $quote->getPalacioOrderComments());
    }
}
