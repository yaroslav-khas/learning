<?php

namespace Khas\YourArt\Controller\Backend;

use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

class AjaxController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var \Khas\YourArt\Domain\Repository\OrdersRepository
     */
    private $ordersRepository;

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return false|string
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function updateStatus(
        \Psr\Http\Message\ServerRequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response
    )
    {
        //var_dump($request);exit;
        $params = $request->getQueryParams()['updateStatus'];
        $order_id = array_key_first($params['tx_yourart_domain_model_orders']);
        $status = $params['tx_yourart_domain_model_orders'][$order_id]['status'];

        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->ordersRepository = $objectManager->get(\Khas\YourArt\Domain\Repository\OrdersRepository::class);
        $persistenceManager = $objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);

        $updRecordOrders = $this->ordersRepository->findByUid($order_id);
        $updRecordOrders->setStatus($status);
        $this->ordersRepository->update($updRecordOrders);
        $persistenceManager->persistAll();

        //$response->getBody()->write('I\'m content fetched via AJAX.');
        return $response;
    }
}
