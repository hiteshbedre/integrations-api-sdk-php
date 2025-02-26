<?php
/**
 * VisitBookingRequestNotification
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docplanner Integrations API
 *
 * Welcome to Docplanner Integrations [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) API!  This API gives You the ability to build Your own application and integrate it with Docplanner services.
 *
 * OpenAPI spec version: 1.0.17.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocPlanner\Client\Model;

use \ArrayAccess;
use \DocPlanner\Client\ObjectSerializer;

/**
 * VisitBookingRequestNotification Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisitBookingRequestNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisitBookingRequestNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'booking_at' => '\DateTime',
'booking_by' => 'string',
'duration' => 'int',
'start_at' => '\DateTime',
'end_at' => '\DateTime',
'address_service' => '\DocPlanner\Client\Model\AddressServiceNotification',
'patient' => '\DocPlanner\Client\Model\Patient',
'signature' => 'string',
'comment' => 'string',
'visit_payment' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'booking_at' => 'date-time',
'booking_by' => null,
'duration' => null,
'start_at' => 'date-time',
'end_at' => 'date-time',
'address_service' => null,
'patient' => null,
'signature' => null,
'comment' => null,
'visit_payment' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'booking_at' => 'booking_at',
'booking_by' => 'booking_by',
'duration' => 'duration',
'start_at' => 'start_at',
'end_at' => 'end_at',
'address_service' => 'address_service',
'patient' => 'patient',
'signature' => 'signature',
'comment' => 'comment',
'visit_payment' => 'visit_payment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'booking_at' => 'setBookingAt',
'booking_by' => 'setBookingBy',
'duration' => 'setDuration',
'start_at' => 'setStartAt',
'end_at' => 'setEndAt',
'address_service' => 'setAddressService',
'patient' => 'setPatient',
'signature' => 'setSignature',
'comment' => 'setComment',
'visit_payment' => 'setVisitPayment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'booking_at' => 'getBookingAt',
'booking_by' => 'getBookingBy',
'duration' => 'getDuration',
'start_at' => 'getStartAt',
'end_at' => 'getEndAt',
'address_service' => 'getAddressService',
'patient' => 'getPatient',
'signature' => 'getSignature',
'comment' => 'getComment',
'visit_payment' => 'getVisitPayment'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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

    const BOOKING_BY_USER = 'user';
const BOOKING_BY_DOCTOR = 'doctor';
const BOOKING_BY_INTEGRATION = 'integration';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBookingByAllowableValues()
    {
        return [
            self::BOOKING_BY_USER,
self::BOOKING_BY_DOCTOR,
self::BOOKING_BY_INTEGRATION,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['booking_at'] = isset($data['booking_at']) ? $data['booking_at'] : null;
        $this->container['booking_by'] = isset($data['booking_by']) ? $data['booking_by'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['address_service'] = isset($data['address_service']) ? $data['address_service'] : null;
        $this->container['patient'] = isset($data['patient']) ? $data['patient'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['visit_payment'] = isset($data['visit_payment']) ? $data['visit_payment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBookingByAllowableValues();
        if (!is_null($this->container['booking_by']) && !in_array($this->container['booking_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'booking_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets booking_at
     *
     * @return \DateTime
     */
    public function getBookingAt()
    {
        return $this->container['booking_at'];
    }

    /**
     * Sets booking_at
     *
     * @param \DateTime $booking_at booking_at
     *
     * @return $this
     */
    public function setBookingAt($booking_at)
    {
        $this->container['booking_at'] = $booking_at;

        return $this;
    }

    /**
     * Gets booking_by
     *
     * @return string
     */
    public function getBookingBy()
    {
        return $this->container['booking_by'];
    }

    /**
     * Sets booking_by
     *
     * @param string $booking_by booking_by
     *
     * @return $this
     */
    public function setBookingBy($booking_by)
    {
        $allowedValues = $this->getBookingByAllowableValues();
        if (!is_null($booking_by) && !in_array($booking_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'booking_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['booking_by'] = $booking_by;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at start_at
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at end_at
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets address_service
     *
     * @return \DocPlanner\Client\Model\AddressServiceNotification
     */
    public function getAddressService()
    {
        return $this->container['address_service'];
    }

    /**
     * Sets address_service
     *
     * @param \DocPlanner\Client\Model\AddressServiceNotification $address_service address_service
     *
     * @return $this
     */
    public function setAddressService($address_service)
    {
        $this->container['address_service'] = $address_service;

        return $this;
    }

    /**
     * Gets patient
     *
     * @return \DocPlanner\Client\Model\Patient
     */
    public function getPatient()
    {
        return $this->container['patient'];
    }

    /**
     * Sets patient
     *
     * @param \DocPlanner\Client\Model\Patient $patient patient
     *
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->container['patient'] = $patient;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets visit_payment
     *
     * @return bool
     */
    public function getVisitPayment()
    {
        return $this->container['visit_payment'];
    }

    /**
     * Sets visit_payment
     *
     * @param bool $visit_payment visit_payment
     *
     * @return $this
     */
    public function setVisitPayment($visit_payment)
    {
        $this->container['visit_payment'] = $visit_payment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
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
