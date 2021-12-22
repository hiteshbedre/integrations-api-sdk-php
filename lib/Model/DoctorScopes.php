<?php
/**
 * DoctorScopes
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
use \DocPlanner\Client\ObjectSerializer;

/**
 * DoctorScopes Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DoctorScopes
{
    /**
     * Possible values of this enum
     */
    const DOCTORADDRESSES = 'doctor.addresses';
const DOCTORLICENSE_NUMBERS = 'doctor.license_numbers';
const ADDRESSBOOKING_EXTRA_FIELDS = 'address.booking_extra_fields';
const ADDRESSONLINE_ONLY = 'address.online_only';
const ADDRESSVISIT_PAYMENT = 'address.visit_payment';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCTORADDRESSES,
self::DOCTORLICENSE_NUMBERS,
self::ADDRESSBOOKING_EXTRA_FIELDS,
self::ADDRESSONLINE_ONLY,
self::ADDRESSVISIT_PAYMENT,        ];
    }
}
