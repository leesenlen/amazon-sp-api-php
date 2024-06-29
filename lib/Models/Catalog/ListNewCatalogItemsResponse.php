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
class ListNewCatalogItemsResponse extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ListNewCatalogItemsResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numberOfResults' => 'integer',
        'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewItems',
        'pagination' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Pagination',
        'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ErrorList',    
        'refinements' => 'object',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numberOfResults'=>null,
        'pagination' => null,
        'items' => null,
        'errors' => null,    
        'refinements' => null,
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
        'numberOfResults' => 'numberOfResults',
        'pagination' => 'pagination',
        'items' => 'items',
        'errors' => 'errors',    
        'refinements' => 'refinements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'numberOfResults'=>'setNumberOfResults',
        'pagination' => 'setPagination',
        'items' => 'setItems',
        'errors' => 'setErrors',    
        'refinements' => 'setRefinements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'numberOfResults'=>'getNumberOfResults',
        'pagination'=>'getPagination',
        'items' => 'getItems',
        'errors' => 'getErrors',  
        'refinements' => 'getRefinements',  
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
        $this->container['numberOfResults'] = isset($data['numberOfResults']) ? $data['numberOfResults'] : null;
        $this->container['pagination'] = isset($data['pagination']) ? json_encode($data['pagination']) : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['refinements'] = isset($data['refinements']) ? $data['refinements'] : null;
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
     * Gets refinements.
     *
     * @return 
     */
    public function getRefinements()
    {
        return $this->container['refinements'];
    }

    /**
     * Sets refinements.
     *
     * @param 
     *
     * @return $this
     */
    public function setRefinements($refinements)
    {
        $this->container['refinements'] = $refinements;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\items
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\items $payload payload
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
     /**
     * Gets setNumberOfResults.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\items setNumberOfResults
     */
    public function getNumberOfResults()
    {
        return $this->container['numberOfResults'];
    }
    

    /**
     * Sets numberOfResults.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\items $numberOfResults
     *
     * @return $this
     */
    public function setNumberOfResults($numberOfResults)
    {
        $this->container['numberOfResults'] = $numberOfResults;

        return $this;
    }

     /**
     * Gets setNumberOfResults.
     *
     * 
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }
    

    /**
     * Sets pagination.
     *
     * 
     *
     * @return $this
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

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
