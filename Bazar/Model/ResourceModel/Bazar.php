<?php
/**
 * @category   India
 * @package    India_Bazar
 * @author     subham845415@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace India\Bazar\Model\ResourceModel;

class Bazar extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('india_bazar', 'bazar_id');   //here "india_bazar" is table name and "bazar_id" is the primary key of custom table
    }
}