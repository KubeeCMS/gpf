<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf19a4c147da2b1d9947bf879b279f91b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Gamajo_Template_Loader' => __DIR__ . '/../..' . '/src/common/gamajo-template-loader.class.php',
        'MockWcProduct' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWcProduct.php',
        'MockWoocommerceGpfCommon' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWoocommerceGpfCommon.php',
        'MockWpPost' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWpPost.php',
        'MockWpTaxonomy' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWpTaxonomy.php',
        'MockWpTerm' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWpTerm.php',
        'WC_Product' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWcProduct.php',
        'WP_Post' => __DIR__ . '/../..' . '/tests/unit/mocks/MockWpPost.php',
        'WoocommerceCostOfGoods' => __DIR__ . '/../..' . '/src/integrations/woocommerce-cost-of-goods.php',
        'WoocommerceGpfAbstractCacheRebuildBatchJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-abstract-cache-rebuild-batch-job.php',
        'WoocommerceGpfAbstractCacheRebuildJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-abstract-cache-rebuild-job.php',
        'WoocommerceGpfAdmin' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-admin.php',
        'WoocommerceGpfCache' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache.php',
        'WoocommerceGpfCacheInvalidator' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-invalidator.php',
        'WoocommerceGpfCacheStatus' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-status.php',
        'WoocommerceGpfClearAllJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-clear-all-job.php',
        'WoocommerceGpfCommon' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-common.php',
        'WoocommerceGpfDebugService' => __DIR__ . '/../..' . '/src/common/woocommerce-gpf-debug-service.php',
        'WoocommerceGpfFeed' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed.php',
        'WoocommerceGpfFeedBing' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-bing.php',
        'WoocommerceGpfFeedGoogle' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-google.php',
        'WoocommerceGpfFeedGoogleInventory' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-google-inventory.php',
        'WoocommerceGpfFeedGoogleLocalProductInventory' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-google-local-product-inventory.php',
        'WoocommerceGpfFeedGoogleLocalProducts' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-google-local-products.php',
        'WoocommerceGpfFeedItem' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-feed-item.php',
        'WoocommerceGpfFrontend' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-frontend.php',
        'WoocommerceGpfImportExportIntegration' => __DIR__ . '/../..' . '/src/common/woocommerce-gpf-import-export-integration.php',
        'WoocommerceGpfMocks' => __DIR__ . '/../..' . '/tests/unit/mocks/WoocommerceGpfMocks.php',
        'WoocommerceGpfMulticurrency' => __DIR__ . '/../..' . '/src/integrations/woocommerce-gpf-multicurrency.php',
        'WoocommerceGpfRebuildComplexJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-rebuild-complex-job.php',
        'WoocommerceGpfRebuildProductJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-rebuild-product-job.php',
        'WoocommerceGpfRebuildSimpleJob' => __DIR__ . '/../..' . '/src/cache/woocommerce-gpf-cache-rebuild-simple-job.php',
        'WoocommerceGpfRestApi' => __DIR__ . '/../..' . '/src/common/woocommerce-gpf-rest-api.php',
        'WoocommerceGpfStatusReport' => __DIR__ . '/../..' . '/src/common/woocommerce-gpf-status-report.php',
        'WoocommerceGpfStructuredData' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-structured-data.php',
        'WoocommerceGpfTemplateLoader' => __DIR__ . '/../..' . '/src/common/woocommerce-gpf-template-loader.class.php',
        'WoocommerceGpfTemplateTags' => __DIR__ . '/../..' . '/src/gpf/woocommerce-gpf-template-tags.php',
        'WoocommerceGpfTestAbstract' => __DIR__ . '/../..' . '/tests/unit/WoocommerceGpfTestAbstract.php',
        'WoocommerceGpfTheContentProtection' => __DIR__ . '/../..' . '/src/integrations/woocommerce-gpf-the-content-protection.php',
        'WoocommerceGpfWcMocks' => __DIR__ . '/../..' . '/tests/unit/mocks/WoocommerceGpfWcMocks.php',
        'WoocommerceGpfWpMocks' => __DIR__ . '/../..' . '/tests/unit/mocks/WoocommerceGpfWpMocks.php',
        'WoocommerceGpfYoastWoocommerceSeo' => __DIR__ . '/../..' . '/src/integrations/yoast-woocommerce-seo.php',
        'WoocommerceMinMaxQuantities' => __DIR__ . '/../..' . '/src/integrations/woocommerce-min-max-quantities.php',
        'WoocommercePrfAdmin' => __DIR__ . '/../..' . '/src/prf/woocommerce-prf-admin.php',
        'WoocommercePrfGoogle' => __DIR__ . '/../..' . '/src/prf/woocommerce-prf-google.php',
        'WoocommercePrfGoogleReviewFeed' => __DIR__ . '/../..' . '/src/prf/woocommerce-prf-google-review-feed.php',
        'WoocommercePrfGoogleReviewProductInfo' => __DIR__ . '/../..' . '/src/prf/woocommerce-prf-google-review-product-info.php',
        'WoocommerceProductFeedsIntegrationManager' => __DIR__ . '/../..' . '/src/common/woocommerce-product-feeds-integration-manager.php',
        'WoocommerceProductFeedsMain' => __DIR__ . '/../..' . '/src/woocommerce-product-feeds-main.php',
        'WoocommerceProductFeedsTermDepthRepository' => __DIR__ . '/../..' . '/src/common/woocommerce-product-feeds-term-depth-repository.php',
        'WoocommerceProductVendors' => __DIR__ . '/../..' . '/src/integrations/woocommerce-product-vendors.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf19a4c147da2b1d9947bf879b279f91b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf19a4c147da2b1d9947bf879b279f91b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf19a4c147da2b1d9947bf879b279f91b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf19a4c147da2b1d9947bf879b279f91b::$classMap;

        }, null, ClassLoader::class);
    }
}