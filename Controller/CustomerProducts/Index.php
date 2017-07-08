<?php

namespace AWstreams\C2C\Controller\CustomerProducts;

class Index extends \AWstreams\C2C\Controller\CustomerProducts
{
    /**
     * Load the page defined in view/frontend/layout/c2c_customer_products_index.xml
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }

}