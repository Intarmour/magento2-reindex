<?php
/**
 * Intarmour
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Intarmour.com license that is
 * available through the world-wide-web at this URL:
 * https://www.intarmour.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Intarmour
 * @package     Intarmour_BackendReindex
 * @copyright   Copyright (c) Intarmour (https://www.intarmour.com/)
 * @license     https://www.intarmour.com/LICENSE.txt
 */

namespace Intarmour\BackendReindex\Controller\Adminhtml\Indexer;

use Exception;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Indexer\IndexerInterface;
use Intarmour\BackendReindex\Controller\Adminhtml\Indexer;

/**
 * Class MassReindex
 * @package Intarmour\BackendReindex\Controller\Adminhtml\Indexer
 */
class MassReindex extends Indexer
{
    /**
     * Display processes grid action
     *
     * @return void
     */
    public function execute()
    {
        $indexerIds = $this->getRequest()->getParam('indexer_ids');
        if (!is_array($indexerIds)) {
            $this->messageManager->addErrorMessage(__('Please select indexers.'));
        } else {
            try {
                foreach ($indexerIds as $indexerId) {
                    /** @var IndexerInterface $indexer */
                    $indexer = $this->indexerRegistry->get($indexerId);
                    $indexer->reindexAll();
                }
                $this->messageManager->addSuccessMessage(__('Total of %1 index(es) have reindexed data.', count($indexerIds)));
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Cannot initialize the indexer process.'));
            }
        }
        $this->_redirect('*/*/list');
    }
}
