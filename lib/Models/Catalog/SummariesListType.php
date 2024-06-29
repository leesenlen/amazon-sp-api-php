<?php
/**
 * NewVariationsListType.
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
 * NewVariationsListType Class Doc Comment.
 *

 * @description Specific variations of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SummariesListType extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SummariesListType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplaceId' => 'string',
        'brand' => 'string',
        'itemName' => 'string',
        'itemClassification' => 'string',
        'websiteDisplayGroupName' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplaceId' => null,
        'brand' => null,
        'itemName' => null,
        'itemClassification' => null,
        'websiteDisplayGroupName' => null,
    ];

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
        'marketplaceId' => 'marketplaceId',
        'brand' => 'brand',
        'itemName' => 'itemName',
        'itemClassification' => 'itemClassification',
        'websiteDisplayGroupName' => 'websiteDisplayGroupName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'brand' => 'setBrand',
        'itemName' => 'setItemName',
        'itemClassification' => 'setItemClassification',
        'websiteDisplayGroupName' => 'setWebsiteDisplayGroupName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'itemName' => 'getItemName',
        'marketplaceId' => 'getMarketplaceId',
        'itemClassification' => 'getItemClassification',
        'websiteDisplayGroupName' => 'getWebsiteDisplayGroupName',
    ];

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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['itemClassification'] = isset($data['itemClassification']) ? $data['itemClassification'] : null;
        $this->container['websiteDisplayGroupName'] = isset($data['websiteDisplayGroupName']) ? $data['websiteDisplayGroupName'] : null;
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
     * Gets brandName.
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brandName.
     *
     * @param string $brandName the brandName variation of the item
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets itemName.
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName.
     *
     * @param string $itemName the value variation of the item
     *
     * @return $this
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets marketplaceId.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId.
     *
     * @param string $marketplaceId the marketplaceId variation of the item
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;
        return $this;
    }

    /**
     * Gets itemClassification.
     *
     * @return string
     */
    public function getItemClassification()
    {
        return $this->container['itemClassification'];
    }

    /**
     * Sets itemClassification.
     *
     * @param string 
     *
     * @return $this
     */
    public function setItemClassification($itemClassification)
    {
        $this->container['itemClassification'] = $itemClassification;
        return $this;
    }

    /**
     * Gets websiteDisplayGroupName.
     *
     * @return string
     */
    public function getWebsiteDisplayGroupName()
    {
        return $this->container['websiteDisplayGroupName'];
    }

    /**
     * Sets websiteDisplayGroupName.
     *
     * @param string 
     *
     * @return $this
     */
    public function setWebsiteDisplayGroupName($websiteDisplayGroupName)
    {
        $this->container['websiteDisplayGroupName'] = $websiteDisplayGroupName;

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
