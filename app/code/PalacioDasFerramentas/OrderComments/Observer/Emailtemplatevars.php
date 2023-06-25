<?php
namespace PalacioDasFerramentas\OrderComments\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

/**
 * Class Emailtemplatevars
 * @package PalacioDasFerramentas\OrderComments\Observer
 */
class Emailtemplatevars implements ObserverInterface
{
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $transport = $observer->getEvent()->getTransport();
        if ($transport->getOrder() != null) {
            $transport['Palacioordercomment'] = $transport->getOrder()->getPalacioOrderComments();
        }
    }
}
