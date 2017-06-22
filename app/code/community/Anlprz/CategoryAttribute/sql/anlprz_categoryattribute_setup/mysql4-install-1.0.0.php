<?php

/********** For Adding script ***********/

$installer = $this;

$installer->startSetup();

$attribute  = array(
    'group'                     => 'General Information',
    'input'                     => 'text',
    'type'                      => 'varchar',
    'label'                     => 'Additional Information',
    'source'                    => 'eav/entity_attribute_source_boolean',
    'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'                   => 1,
    'required'                  => 0,
    'visible_on_front'          => 0,
    'is_html_allowed_on_front'  => 1,
    'is_configurable'           => 0,
    'searchable'                => 0,
    'filterable'                => 0,
    'comparable'                => 0,
    'unique'                    => false,
    'user_defined'              => false,
    'default'           		=> '',
    'is_user_defined'           => true,
    'used_in_product_listing'   => false
);
$installer->addAttribute('catalog_category', 'customadditionalinfo', $attribute);
$installer->endSetup();

/********** For Adding End of script ***********/



/**** For Removing or uninstalling ****/
//$installer = $this;
//$installer->removeAttribute('catalog_category', 'static_block');
/*****For Removing or uninstalling ****/

?>