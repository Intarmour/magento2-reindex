<a href="http://www.intarmour.com" title="Magento Extension"><img src="https://intarmour.com/wp-content/uploads/2023/12/intarmour-logo-white.png" width="100" align="right" alt="Magento2 plugins" /></a>

# Reindex Magento 2 / Adobe Commerce from Admin
[![Latest Stable Version](https://poser.okvpn.org/intarmour/module-backend-reindex/v/stable)](https://packagist.org/packages/intarmour/module-backend-reindex)
[![Total Downloads](https://poser.okvpn.org/intarmour/module-backend-reindex/downloads)](https://packagist.org/packages/intarmour/module-backend-reindex)


##### For Magento 2.4.x

Reindexing your Magento 2 / Adobe Commerce store from Magento's admin has been removed and your only option is to set your indexes to "Update on Save" or reindex using SSH / CLI command line which is time-consuming. With our free Reindex module for Magento 2, you can quickly and easily update individual or all indexes from within your Magento admin. Ideal for project managers or QA department during site development and testing of new product and functionality. This module is not meant for large productions environment.

![Magento Reindex](https://image.ibb.co/ihvetH/Reindex_Magento_2_from_Admin_by_Magepal.gif)

Indexes

```
catalog_category_product                 Category Products
catalog_product_category                 Product Categories
catalog_product_price                    Product Price
catalog_product_attribute                Product EAV
cataloginventory_stock                   Stock
catalogrule_rule                         Catalog Rule Product
catalogrule_product                      Catalog Product Rule
catalogsearch_fulltext                   Catalog Search
```

#### Magento Store Reindex Mode
By default, you can set your store indexers to "Update on Save" or "Update by Schedule". Setting your Magento store to index on save will update your indexes when admin changes occur, while update by schedule only run at a set interval by your cron job. In your server cron must be set up correctly for "Update by Schedule" to work which must be set up by a developer, system admin or hosting company.

 
### Installation Using Composer (recommended)
```
composer require intarmour/module-backend-reindex
```

#### How to reindex your Magento 2 / Adobe Commerce store from Command Line - One or more indexers are invalid

Reindex Magento Data via SSH (from Magento root folder)

> php bin/magento indexer:reindex

Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/Intarmour/magento2-reindex/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@intarmour.com and if we like your idea we will add this feature for free or at a discounted rate.
