<?php

namespace AWstreams\C2C\Controller\Index;

class Index extends \AWstreams\C2C\Controller\Index
{
    /**
     * Load the page defined in view/frontend/layout/c2c_index_index.xml
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }

}