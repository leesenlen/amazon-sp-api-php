<?php
/**
 * GetCatalogItemResponse.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Catalog;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * GetCatalogItemResponse Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class NewAttributes extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'NewAttributes';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bullet_point'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'brand'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'product_description'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'variation_theme'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'generic_keyword'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'list_price'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewPriceList',
        'item_type_keyword'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'product_site_launch_date'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageList',
        'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ErrorList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bullet_point' => null,
        'brand' => null,
        'product_description' => null,
        'variation_theme' => null,
        'generic_keyword' => null,
        'list_price' => null,
        'item_type_keyword' => null,
        'product_site_launch_date' => null,
        'errors' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bullet_point' => 'bullet_point',
        'brand'=>'brand',
        'product_description' => 'product_description',
        'variation_theme' => 'variation_theme',
        'generic_keyword' => 'generic_keyword',
        'list_price' => 'list_price',
        'item_type_keyword' => 'item_type_keyword',
        'product_site_launch_date' => 'product_site_launch_date',
        'errors' => 'errors',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'bullet_point' => 'setBulletPoint',
        'brand'=>'setBrand',
        'product_description' => 'setProductDescription',
        'variation_theme' => 'setVariationTheme',
        'generic_keyword' => 'setGenericKeyword',
        'list_price' => 'setListPrice',
        'item_type_keyword' => 'setItemTypeKeyword',
        'product_site_launch_date' => 'setProductSiteLaunchDate',
        'errors' => 'setErrors',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'bullet_point' => 'getBulletPoint',
        'brand'=>'getBrand',
        'product_description' => 'getProductDescription',
        'variation_theme' => 'getVariationTheme',
        'generic_keyword' => 'getGenericKeyword',
        'list_price' => 'getListPrice',
        'item_type_keyword' => 'getItemTypeKeyword',
        'product_site_launch_date' => 'getProductSiteLaunchDate',
        'errors' => 'getErrors',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bullet_point'] = isset($data['bullet_point']) ? $data['bullet_point'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['variation_theme'] = isset($data['variation_theme']) ? $data['variation_theme'] : null;
        $this->container['generic_keyword'] = isset($data['generic_keyword']) ? $data['generic_keyword'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['item_type_keyword'] = isset($data['item_type_keyword']) ? $data['item_type_keyword'] : null;
        $this->container['product_site_launch_date'] = isset($data['product_site_launch_date']) ? $data['product_site_launch_date'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets bullet_point.
     *
     * @return array
     */
    public function getBulletPoint()
    {
        return $this->container['bullet_point'];
    }

    /**
     * Sets bulletPoint.
     *
     * @param string $bulletPoint the bulletPoint variation of the item
     *
     * @return $this
     */
    public function setBulletPoint($bulletPoint)
    {
        $this->container['bullet_point'] = $bulletPoint;

        return $this;
    }
     /**
     * Gets brand.
     *
     * @return array
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand.
     *
     * @param string $brand the brand variation of the item
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets product_description.
     *
     * @return array
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets productDescription.
     *
     * @param array $productDescription
     *
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->container['product_description'] = $productDescription;

        return $this;
    }

    /**
     * Gets variation_theme.
     *
     * @return array
     */
    public function getVariationTheme()
    {
        return $this->container['variation_theme'];
    }

    /**
     * Sets variationTheme.
     *
     * @param array $variationTheme
     *
     * @return $this
     */
    public function setVariationTheme($variationTheme)
    {
        $this->container['variation_theme'] = $variationTheme;

        return $this;
    }

    /**
     * Gets generic_keyword.
     *
     * @return array
     */
    public function getGenericKeyword()
    {
        return $this->container['generic_keyword'];
    }

    /**
     * Sets genericKeyword.
     *
     * @param array $genericKeyword
     *
     * @return $this
     */
    public function setGenericKeyword($genericKeyword)
    {
        $this->container['generic_keyword'] = $genericKeyword;

        return $this;
    }

    /**
     * Gets list_price.
     *
     * @return array
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets listPrice.
     *
     * @param array $listPrice
     *
     * @return $this
     */
    public function setListPrice($listPrice)
    {
        $this->container['list_price'] = $listPrice;

        return $this;
    }

    /**
     * Gets item_type_keyword.
     *
     * @return array
     */
    public function getItemTypeKeyword()
    {
        return $this->container['item_type_keyword'];
    }

    /**
     * Sets itemTypeKeyword.
     *
     * @param array $itemTypeKeyword
     *
     * @return $this
     */
    public function setItemTypeKeyword($itemTypeKeyword)
    {
        $this->container['item_type_keyword'] = $itemTypeKeyword;

        return $this;
    }

    /**
     * Gets product_site_launch_date.
     *
     * @return array
     */
    public function getProductSiteLaunchDate()
    {
        return $this->container['product_site_launch_date'];
    }

    /**
     * Sets productSiteLaunchDate.
     *
     * @param array $productSiteLaunchDate
     *
     * @return $this
     */
    public function setProductSiteLaunchDate($productSiteLaunchDate)
    {
        $this->container['product_site_launch_date'] = $productSiteLaunchDate;

        return $this;
    }
    
    /**
     * Gets errors.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ErrorList
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ErrorList $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
