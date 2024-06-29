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
class NewItemsType extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'NewItemsType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
        'attributes'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewAttributes',
        'dimensions'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewDimensionsList',
        'productTypes'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewProductTypes',
        'relationships'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\NewVariationsList',
        'summaries' =>'object',
        'images' =>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ImagesList',
        'salesRanks' =>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\RanksList',
        'identifiers'=>'\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ItemIdentifiers',
        'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ErrorList',];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
        'attributes'=>null,
        'dimensions'=>null,
        'productTypes'=>null,
        'relationships'=>null,
        'summaries'=>null,
        'images'=>null,
        'salesRanks'=>null,
        'identifiers'=>null,
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
        'asin' => 'asin',
        'attributes'=>'attributes',
        'dimensions'=>'dimensions',
        'productTypes'=>'productTypes',
        'relationships'=>'relationships',
        'summaries'=>'summaries',
        'images'=>'images',
        'salesRanks'=>'salesRanks',
        'identifiers'=>'identifiers',
        'errors' => 'errors',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'attributes'=>'setAttributes',
        'dimensions'=>'setDimensions',
        'productTypes'=>'setProductTypes',
        'relationships'=>'setRelationships',
        'summaries'=>'setSummaries',
        'images'=>'setImages',
        'salesRanks'=>'setSalesRanks',
        'identifiers'=>'setIdentifiers',
        'errors' => 'setErrors',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'attributes'=>'getAttributes',
        'dimensions'=>'getDimensions',
        'productTypes'=>'getProductTypes',
        'relationships'=>'getRelationships',
        'summaries'=>'getSummaries',
        'images'=>'getImages',
        'salesRanks'=>'setSalesRanks',
        'identifiers'=>'getIdentifiers',
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['productTypes'] = isset($data['productTypes']) ? $data['productTypes'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['salesRanks'] = isset($data['salesRanks']) ? $data['salesRanks'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
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
     * Gets Asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets color.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets attributes.
     *
     * @return obj
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes.
     *
     * @param string $attributes the attributes variation of the item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    /**
     * Gets dimensions.
     *
     * @return obj
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }
     /**
     * Gets relationships.
     *
     * @return obj
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets productTypes.
     *
     * @param string $dimensions
     *
     * @return $this
     */
    public function setProductTypes($productTypes)
    {
        $this->container['product_types'] = $productTypes;

        return $this;
    }
     /**
     * Gets product_types.
     *
     * @return obj
     */
    public function getProductTypes()
    {
        return $this->container['product_types'];
    }

    /**
     * Sets relationships.
     *
     * @param string $relationships the relationships variation of the item
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets summaries.
     *
     * @return string
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries.
     *
     * @param string $summaries the summaries variation of the item
     *
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets images.
     *
     * @return string
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images.
     *
     * @param string images the images of the item
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets ranks.
     *
     * @return string
     */
    public function getSalesRanks()
    {
        return $this->container['salesRanks'];
    }

    /**
     * Sets ranks.
     *
     * @param string ranks the ranks of the item
     *
     * @return $this
     */
    public function setSalesRanks($salesRanks)
    {
        $this->container['salesRanks'] = $salesRanks;

        return $this;
    }

    /**
     * Gets identifiers.
     *
     * @return string
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers.
     *
     * @param string ranks the ranks of the item
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

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
