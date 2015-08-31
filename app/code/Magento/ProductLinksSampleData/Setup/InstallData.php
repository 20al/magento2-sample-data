<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ProductLinksSampleData\Setup;

use Magento\Framework\Setup;

/**
 * Class Setup
 * Launches setup of sample data for catalog module
 */
class InstallData implements Setup\InstallDataInterface
{
    /**
     * Setup class for products
     *
     * @var \Magento\CatalogSampleData\Model\ProductLink
     */
    protected $productLink;

    /**
     * @param \Magento\CatalogSampleData\Model\ProductLink $productLinkSetup
     */
    public function __construct(
        \Magento\CatalogSampleData\Model\ProductLink $productLinkSetup
    ) {
        $this->productLink = $productLinkSetup;
    }

    /**
     * {@inheritdoc}
     */
    public function install(Setup\ModuleDataSetupInterface $setup, Setup\ModuleContextInterface $context)
    {
        $this->productLink->install(
            ['Magento_ProductLinksSampleData::fixtures/related.csv'],
            ['Magento_ProductLinksSampleData::fixtures/upsell.csv'],
            ['Magento_ProductLinksSampleData::fixtures/crossell.csv']
        );
    }
}
