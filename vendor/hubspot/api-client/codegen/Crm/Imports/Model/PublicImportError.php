<?php
/**
 * PublicImportError
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Imports
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM Imports
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Imports\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Imports\ObjectSerializer;

/**
 * PublicImportError Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Imports
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PublicImportError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicImportError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_type' => 'string',
        'object_type' => 'string',
        'invalid_value' => 'string',
        'extra_context' => 'string',
        'object_type_id' => 'string',
        'known_column_number' => 'int',
        'source_data' => '\HubSpot\Client\Crm\Imports\Model\ImportRowCore',
        'created_at' => 'int',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'error_type' => null,
        'object_type' => null,
        'invalid_value' => null,
        'extra_context' => null,
        'object_type_id' => null,
        'known_column_number' => 'int32',
        'source_data' => null,
        'created_at' => 'int32',
        'id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_type' => 'errorType',
        'object_type' => 'objectType',
        'invalid_value' => 'invalidValue',
        'extra_context' => 'extraContext',
        'object_type_id' => 'objectTypeId',
        'known_column_number' => 'knownColumnNumber',
        'source_data' => 'sourceData',
        'created_at' => 'createdAt',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_type' => 'setErrorType',
        'object_type' => 'setObjectType',
        'invalid_value' => 'setInvalidValue',
        'extra_context' => 'setExtraContext',
        'object_type_id' => 'setObjectTypeId',
        'known_column_number' => 'setKnownColumnNumber',
        'source_data' => 'setSourceData',
        'created_at' => 'setCreatedAt',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_type' => 'getErrorType',
        'object_type' => 'getObjectType',
        'invalid_value' => 'getInvalidValue',
        'extra_context' => 'getExtraContext',
        'object_type_id' => 'getObjectTypeId',
        'known_column_number' => 'getKnownColumnNumber',
        'source_data' => 'getSourceData',
        'created_at' => 'getCreatedAt',
        'id' => 'getId'
    ];

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
        return self::$openAPIModelName;
    }

    const ERROR_TYPE_INCORRECT_NUMBER_OF_COLUMNS = 'INCORRECT_NUMBER_OF_COLUMNS';
    const ERROR_TYPE_INVALID_OBJECT_ID = 'INVALID_OBJECT_ID';
    const ERROR_TYPE_INVALID_ASSOCIATION_IDENTIFIER = 'INVALID_ASSOCIATION_IDENTIFIER';
    const ERROR_TYPE_NO_OBJECT_ID_FROM_ASSOCIATION_IDENTIFIER = 'NO_OBJECT_ID_FROM_ASSOCIATION_IDENTIFIER';
    const ERROR_TYPE_MULTIPLE_COMPANIES_WITH_THIS_DOMAIN = 'MULTIPLE_COMPANIES_WITH_THIS_DOMAIN';
    const ERROR_TYPE_PROPERTY_DEFINITION_NOT_FOUND = 'PROPERTY_DEFINITION_NOT_FOUND';
    const ERROR_TYPE_PROPERTY_VALUE_NOT_FOUND = 'PROPERTY_VALUE_NOT_FOUND';
    const ERROR_TYPE_COULD_NOT_FIND_OWNER = 'COULD_NOT_FIND_OWNER';
    const ERROR_TYPE_MULTIPLE_OWNERS_FOUND = 'MULTIPLE_OWNERS_FOUND';
    const ERROR_TYPE_COULD_NOT_PARSE_NUMBER = 'COULD_NOT_PARSE_NUMBER';
    const ERROR_TYPE_COULD_NOT_PARSE_DATE = 'COULD_NOT_PARSE_DATE';
    const ERROR_TYPE_COULD_NOT_PARSE_TERM = 'COULD_NOT_PARSE_TERM';
    const ERROR_TYPE_OUTSIDE_VALID_TIME_RANGE = 'OUTSIDE_VALID_TIME_RANGE';
    const ERROR_TYPE_OUTSIDE_VALID_TERM_RANGE = 'OUTSIDE_VALID_TERM_RANGE';
    const ERROR_TYPE_COULD_NOT_PARSE_ROW = 'COULD_NOT_PARSE_ROW';
    const ERROR_TYPE_INVALID_ENUMERATION_OPTION = 'INVALID_ENUMERATION_OPTION';
    const ERROR_TYPE_AMBIGUOUS_ENUMERATION_OPTION = 'AMBIGUOUS_ENUMERATION_OPTION';
    const ERROR_TYPE_FAILED_VALIDATION = 'FAILED_VALIDATION';
    const ERROR_TYPE_FAILED_TO_CREATE_ASSOCIATION = 'FAILED_TO_CREATE_ASSOCIATION';
    const ERROR_TYPE_FILE_NOT_FOUND = 'FILE_NOT_FOUND';
    const ERROR_TYPE_INVALID_COLUMN_CONFIGURATION = 'INVALID_COLUMN_CONFIGURATION';
    const ERROR_TYPE_INVALID_FILE_TYPE = 'INVALID_FILE_TYPE';
    const ERROR_TYPE_INVALID_SPREADSHEET = 'INVALID_SPREADSHEET';
    const ERROR_TYPE_INVALID_SHEET_COUNT = 'INVALID_SHEET_COUNT';
    const ERROR_TYPE_FAILED_TO_PROCESS_OBJECT_WITH_EMPTY_PROPERTY_VALUES = 'FAILED_TO_PROCESS_OBJECT_WITH_EMPTY_PROPERTY_VALUES';
    const ERROR_TYPE_UNKNOWN_BAD_REQUEST = 'UNKNOWN_BAD_REQUEST';
    const ERROR_TYPE_GDPR_BLACKLISTED_EMAIL = 'GDPR_BLACKLISTED_EMAIL';
    const ERROR_TYPE_DUPLICATE_ASSOCIATION_ID = 'DUPLICATE_ASSOCIATION_ID';
    const ERROR_TYPE_LIMIT_EXCEEDED = 'LIMIT_EXCEEDED';
    const ERROR_TYPE_INVALID_ALTERNATE_ID = 'INVALID_ALTERNATE_ID';
    const ERROR_TYPE_INVALID_EMAIL = 'INVALID_EMAIL';
    const ERROR_TYPE_INVALID_DOMAIN = 'INVALID_DOMAIN';
    const ERROR_TYPE_DUPLICATE_ROW_CONTENT = 'DUPLICATE_ROW_CONTENT';
    const ERROR_TYPE_INVALID_NUMBER_SIZE = 'INVALID_NUMBER_SIZE';
    const ERROR_TYPE_UNKNOWN_ERROR = 'UNKNOWN_ERROR';
    const ERROR_TYPE_FAILED_TO_OPT_OUT_CONTACT = 'FAILED_TO_OPT_OUT_CONTACT';
    const ERROR_TYPE_INVALID_REQUIRED_PROPERTY = 'INVALID_REQUIRED_PROPERTY';
    const ERROR_TYPE_DUPLICATE_ALTERNATE_ID = 'DUPLICATE_ALTERNATE_ID';
    const ERROR_TYPE_DUPLICATE_OBJECT_ID = 'DUPLICATE_OBJECT_ID';
    const ERROR_TYPE_DUPLICATE_UNIQUE_PROPERTY_VALUE = 'DUPLICATE_UNIQUE_PROPERTY_VALUE';
    const OBJECT_TYPE_CONTACT = 'CONTACT';
    const OBJECT_TYPE_COMPANY = 'COMPANY';
    const OBJECT_TYPE_DEAL = 'DEAL';
    const OBJECT_TYPE_ENGAGEMENT = 'ENGAGEMENT';
    const OBJECT_TYPE_TICKET = 'TICKET';
    const OBJECT_TYPE_OWNER = 'OWNER';
    const OBJECT_TYPE_PRODUCT = 'PRODUCT';
    const OBJECT_TYPE_LINE_ITEM = 'LINE_ITEM';
    const OBJECT_TYPE_BET_DELIVERABLE_SERVICE = 'BET_DELIVERABLE_SERVICE';
    const OBJECT_TYPE_CONTENT = 'CONTENT';
    const OBJECT_TYPE_CONVERSATION = 'CONVERSATION';
    const OBJECT_TYPE_BET_ALERT = 'BET_ALERT';
    const OBJECT_TYPE_PORTAL = 'PORTAL';
    const OBJECT_TYPE_QUOTE = 'QUOTE';
    const OBJECT_TYPE_FORM_SUBMISSION_INBOUNDDB = 'FORM_SUBMISSION_INBOUNDDB';
    const OBJECT_TYPE_QUOTA = 'QUOTA';
    const OBJECT_TYPE_UNSUBSCRIBE = 'UNSUBSCRIBE';
    const OBJECT_TYPE_COMMUNICATION = 'COMMUNICATION';
    const OBJECT_TYPE_FEEDBACK_SUBMISSION = 'FEEDBACK_SUBMISSION';
    const OBJECT_TYPE_ATTRIBUTION = 'ATTRIBUTION';
    const OBJECT_TYPE_SALESFORCE_SYNC_ERROR = 'SALESFORCE_SYNC_ERROR';
    const OBJECT_TYPE_RESTORABLE_CRM_OBJECT = 'RESTORABLE_CRM_OBJECT';
    const OBJECT_TYPE_HUB = 'HUB';
    const OBJECT_TYPE_LANDING_PAGE = 'LANDING_PAGE';
    const OBJECT_TYPE_PRODUCT_OR_FOLDER = 'PRODUCT_OR_FOLDER';
    const OBJECT_TYPE_TASK = 'TASK';
    const OBJECT_TYPE_FORM = 'FORM';
    const OBJECT_TYPE_MARKETING_EMAIL = 'MARKETING_EMAIL';
    const OBJECT_TYPE_AD_ACCOUNT = 'AD_ACCOUNT';
    const OBJECT_TYPE_AD_CAMPAIGN = 'AD_CAMPAIGN';
    const OBJECT_TYPE_AD_GROUP = 'AD_GROUP';
    const OBJECT_TYPE_AD = 'AD';
    const OBJECT_TYPE_KEYWORD = 'KEYWORD';
    const OBJECT_TYPE_CAMPAIGN = 'CAMPAIGN';
    const OBJECT_TYPE_SOCIAL_CHANNEL = 'SOCIAL_CHANNEL';
    const OBJECT_TYPE_SOCIAL_POST = 'SOCIAL_POST';
    const OBJECT_TYPE_SITE_PAGE = 'SITE_PAGE';
    const OBJECT_TYPE_BLOG_POST = 'BLOG_POST';
    const OBJECT_TYPE_IMPORT = 'IMPORT';
    const OBJECT_TYPE_EXPORT = 'EXPORT';
    const OBJECT_TYPE_CTA = 'CTA';
    const OBJECT_TYPE_TASK_TEMPLATE = 'TASK_TEMPLATE';
    const OBJECT_TYPE_AUTOMATION_PLATFORM_FLOW = 'AUTOMATION_PLATFORM_FLOW';
    const OBJECT_TYPE_OBJECT_LIST = 'OBJECT_LIST';
    const OBJECT_TYPE_NOTE = 'NOTE';
    const OBJECT_TYPE_MEETING_EVENT = 'MEETING_EVENT';
    const OBJECT_TYPE_CALL = 'CALL';
    const OBJECT_TYPE_EMAIL = 'EMAIL';
    const OBJECT_TYPE_PUBLISHING_TASK = 'PUBLISHING_TASK';
    const OBJECT_TYPE_CONVERSATION_SESSION = 'CONVERSATION_SESSION';
    const OBJECT_TYPE_CONTACT_CREATE_ATTRIBUTION = 'CONTACT_CREATE_ATTRIBUTION';
    const OBJECT_TYPE_INVOICE = 'INVOICE';
    const OBJECT_TYPE_MARKETING_EVENT = 'MARKETING_EVENT';
    const OBJECT_TYPE_CONVERSATION_INBOX = 'CONVERSATION_INBOX';
    const OBJECT_TYPE_CHATFLOW = 'CHATFLOW';
    const OBJECT_TYPE_MEDIA_BRIDGE = 'MEDIA_BRIDGE';
    const OBJECT_TYPE_SEQUENCE = 'SEQUENCE';
    const OBJECT_TYPE_SEQUENCE_STEP = 'SEQUENCE_STEP';
    const OBJECT_TYPE_FORECAST = 'FORECAST';
    const OBJECT_TYPE_SNIPPET = 'SNIPPET';
    const OBJECT_TYPE_TEMPLATE = 'TEMPLATE';
    const OBJECT_TYPE_DEAL_CREATE_ATTRIBUTION = 'DEAL_CREATE_ATTRIBUTION';
    const OBJECT_TYPE_QUOTE_TEMPLATE = 'QUOTE_TEMPLATE';
    const OBJECT_TYPE_QUOTE_MODULE = 'QUOTE_MODULE';
    const OBJECT_TYPE_QUOTE_MODULE_FIELD = 'QUOTE_MODULE_FIELD';
    const OBJECT_TYPE_QUOTE_FIELD = 'QUOTE_FIELD';
    const OBJECT_TYPE_SEQUENCE_ENROLLMENT = 'SEQUENCE_ENROLLMENT';
    const OBJECT_TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
    const OBJECT_TYPE_ACCEPTANCE_TEST = 'ACCEPTANCE_TEST';
    const OBJECT_TYPE_SOCIAL_BROADCAST = 'SOCIAL_BROADCAST';
    const OBJECT_TYPE_DEAL_SPLIT = 'DEAL_SPLIT';
    const OBJECT_TYPE_DEAL_REGISTRATION = 'DEAL_REGISTRATION';
    const OBJECT_TYPE_GOAL_TARGET = 'GOAL_TARGET';
    const OBJECT_TYPE_GOAL_TARGET_GROUP = 'GOAL_TARGET_GROUP';
    const OBJECT_TYPE_PORTAL_OBJECT_SYNC_MESSAGE = 'PORTAL_OBJECT_SYNC_MESSAGE';
    const OBJECT_TYPE_FILE_MANAGER_FILE = 'FILE_MANAGER_FILE';
    const OBJECT_TYPE_FILE_MANAGER_FOLDER = 'FILE_MANAGER_FOLDER';
    const OBJECT_TYPE_SEQUENCE_STEP_ENROLLMENT = 'SEQUENCE_STEP_ENROLLMENT';
    const OBJECT_TYPE_APPROVAL = 'APPROVAL';
    const OBJECT_TYPE_APPROVAL_STEP = 'APPROVAL_STEP';
    const OBJECT_TYPE_CTA_VARIANT = 'CTA_VARIANT';
    const OBJECT_TYPE_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorTypeAllowableValues()
    {
        return [
            self::ERROR_TYPE_INCORRECT_NUMBER_OF_COLUMNS,
            self::ERROR_TYPE_INVALID_OBJECT_ID,
            self::ERROR_TYPE_INVALID_ASSOCIATION_IDENTIFIER,
            self::ERROR_TYPE_NO_OBJECT_ID_FROM_ASSOCIATION_IDENTIFIER,
            self::ERROR_TYPE_MULTIPLE_COMPANIES_WITH_THIS_DOMAIN,
            self::ERROR_TYPE_PROPERTY_DEFINITION_NOT_FOUND,
            self::ERROR_TYPE_PROPERTY_VALUE_NOT_FOUND,
            self::ERROR_TYPE_COULD_NOT_FIND_OWNER,
            self::ERROR_TYPE_MULTIPLE_OWNERS_FOUND,
            self::ERROR_TYPE_COULD_NOT_PARSE_NUMBER,
            self::ERROR_TYPE_COULD_NOT_PARSE_DATE,
            self::ERROR_TYPE_COULD_NOT_PARSE_TERM,
            self::ERROR_TYPE_OUTSIDE_VALID_TIME_RANGE,
            self::ERROR_TYPE_OUTSIDE_VALID_TERM_RANGE,
            self::ERROR_TYPE_COULD_NOT_PARSE_ROW,
            self::ERROR_TYPE_INVALID_ENUMERATION_OPTION,
            self::ERROR_TYPE_AMBIGUOUS_ENUMERATION_OPTION,
            self::ERROR_TYPE_FAILED_VALIDATION,
            self::ERROR_TYPE_FAILED_TO_CREATE_ASSOCIATION,
            self::ERROR_TYPE_FILE_NOT_FOUND,
            self::ERROR_TYPE_INVALID_COLUMN_CONFIGURATION,
            self::ERROR_TYPE_INVALID_FILE_TYPE,
            self::ERROR_TYPE_INVALID_SPREADSHEET,
            self::ERROR_TYPE_INVALID_SHEET_COUNT,
            self::ERROR_TYPE_FAILED_TO_PROCESS_OBJECT_WITH_EMPTY_PROPERTY_VALUES,
            self::ERROR_TYPE_UNKNOWN_BAD_REQUEST,
            self::ERROR_TYPE_GDPR_BLACKLISTED_EMAIL,
            self::ERROR_TYPE_DUPLICATE_ASSOCIATION_ID,
            self::ERROR_TYPE_LIMIT_EXCEEDED,
            self::ERROR_TYPE_INVALID_ALTERNATE_ID,
            self::ERROR_TYPE_INVALID_EMAIL,
            self::ERROR_TYPE_INVALID_DOMAIN,
            self::ERROR_TYPE_DUPLICATE_ROW_CONTENT,
            self::ERROR_TYPE_INVALID_NUMBER_SIZE,
            self::ERROR_TYPE_UNKNOWN_ERROR,
            self::ERROR_TYPE_FAILED_TO_OPT_OUT_CONTACT,
            self::ERROR_TYPE_INVALID_REQUIRED_PROPERTY,
            self::ERROR_TYPE_DUPLICATE_ALTERNATE_ID,
            self::ERROR_TYPE_DUPLICATE_OBJECT_ID,
            self::ERROR_TYPE_DUPLICATE_UNIQUE_PROPERTY_VALUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_CONTACT,
            self::OBJECT_TYPE_COMPANY,
            self::OBJECT_TYPE_DEAL,
            self::OBJECT_TYPE_ENGAGEMENT,
            self::OBJECT_TYPE_TICKET,
            self::OBJECT_TYPE_OWNER,
            self::OBJECT_TYPE_PRODUCT,
            self::OBJECT_TYPE_LINE_ITEM,
            self::OBJECT_TYPE_BET_DELIVERABLE_SERVICE,
            self::OBJECT_TYPE_CONTENT,
            self::OBJECT_TYPE_CONVERSATION,
            self::OBJECT_TYPE_BET_ALERT,
            self::OBJECT_TYPE_PORTAL,
            self::OBJECT_TYPE_QUOTE,
            self::OBJECT_TYPE_FORM_SUBMISSION_INBOUNDDB,
            self::OBJECT_TYPE_QUOTA,
            self::OBJECT_TYPE_UNSUBSCRIBE,
            self::OBJECT_TYPE_COMMUNICATION,
            self::OBJECT_TYPE_FEEDBACK_SUBMISSION,
            self::OBJECT_TYPE_ATTRIBUTION,
            self::OBJECT_TYPE_SALESFORCE_SYNC_ERROR,
            self::OBJECT_TYPE_RESTORABLE_CRM_OBJECT,
            self::OBJECT_TYPE_HUB,
            self::OBJECT_TYPE_LANDING_PAGE,
            self::OBJECT_TYPE_PRODUCT_OR_FOLDER,
            self::OBJECT_TYPE_TASK,
            self::OBJECT_TYPE_FORM,
            self::OBJECT_TYPE_MARKETING_EMAIL,
            self::OBJECT_TYPE_AD_ACCOUNT,
            self::OBJECT_TYPE_AD_CAMPAIGN,
            self::OBJECT_TYPE_AD_GROUP,
            self::OBJECT_TYPE_AD,
            self::OBJECT_TYPE_KEYWORD,
            self::OBJECT_TYPE_CAMPAIGN,
            self::OBJECT_TYPE_SOCIAL_CHANNEL,
            self::OBJECT_TYPE_SOCIAL_POST,
            self::OBJECT_TYPE_SITE_PAGE,
            self::OBJECT_TYPE_BLOG_POST,
            self::OBJECT_TYPE_IMPORT,
            self::OBJECT_TYPE_EXPORT,
            self::OBJECT_TYPE_CTA,
            self::OBJECT_TYPE_TASK_TEMPLATE,
            self::OBJECT_TYPE_AUTOMATION_PLATFORM_FLOW,
            self::OBJECT_TYPE_OBJECT_LIST,
            self::OBJECT_TYPE_NOTE,
            self::OBJECT_TYPE_MEETING_EVENT,
            self::OBJECT_TYPE_CALL,
            self::OBJECT_TYPE_EMAIL,
            self::OBJECT_TYPE_PUBLISHING_TASK,
            self::OBJECT_TYPE_CONVERSATION_SESSION,
            self::OBJECT_TYPE_CONTACT_CREATE_ATTRIBUTION,
            self::OBJECT_TYPE_INVOICE,
            self::OBJECT_TYPE_MARKETING_EVENT,
            self::OBJECT_TYPE_CONVERSATION_INBOX,
            self::OBJECT_TYPE_CHATFLOW,
            self::OBJECT_TYPE_MEDIA_BRIDGE,
            self::OBJECT_TYPE_SEQUENCE,
            self::OBJECT_TYPE_SEQUENCE_STEP,
            self::OBJECT_TYPE_FORECAST,
            self::OBJECT_TYPE_SNIPPET,
            self::OBJECT_TYPE_TEMPLATE,
            self::OBJECT_TYPE_DEAL_CREATE_ATTRIBUTION,
            self::OBJECT_TYPE_QUOTE_TEMPLATE,
            self::OBJECT_TYPE_QUOTE_MODULE,
            self::OBJECT_TYPE_QUOTE_MODULE_FIELD,
            self::OBJECT_TYPE_QUOTE_FIELD,
            self::OBJECT_TYPE_SEQUENCE_ENROLLMENT,
            self::OBJECT_TYPE_SUBSCRIPTION,
            self::OBJECT_TYPE_ACCEPTANCE_TEST,
            self::OBJECT_TYPE_SOCIAL_BROADCAST,
            self::OBJECT_TYPE_DEAL_SPLIT,
            self::OBJECT_TYPE_DEAL_REGISTRATION,
            self::OBJECT_TYPE_GOAL_TARGET,
            self::OBJECT_TYPE_GOAL_TARGET_GROUP,
            self::OBJECT_TYPE_PORTAL_OBJECT_SYNC_MESSAGE,
            self::OBJECT_TYPE_FILE_MANAGER_FILE,
            self::OBJECT_TYPE_FILE_MANAGER_FOLDER,
            self::OBJECT_TYPE_SEQUENCE_STEP_ENROLLMENT,
            self::OBJECT_TYPE_APPROVAL,
            self::OBJECT_TYPE_APPROVAL_STEP,
            self::OBJECT_TYPE_CTA_VARIANT,
            self::OBJECT_TYPE_UNKNOWN,
        ];
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
        $this->container['error_type'] = isset($data['error_type']) ? $data['error_type'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['invalid_value'] = isset($data['invalid_value']) ? $data['invalid_value'] : null;
        $this->container['extra_context'] = isset($data['extra_context']) ? $data['extra_context'] : null;
        $this->container['object_type_id'] = isset($data['object_type_id']) ? $data['object_type_id'] : null;
        $this->container['known_column_number'] = isset($data['known_column_number']) ? $data['known_column_number'] : null;
        $this->container['source_data'] = isset($data['source_data']) ? $data['source_data'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['error_type'] === null) {
            $invalidProperties[] = "'error_type' can't be null";
        }
        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!is_null($this->container['error_type']) && !in_array($this->container['error_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($this->container['object_type']) && !in_array($this->container['object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['known_column_number'] === null) {
            $invalidProperties[] = "'known_column_number' can't be null";
        }
        if ($this->container['source_data'] === null) {
            $invalidProperties[] = "'source_data' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets error_type
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     *
     * @param string $error_type error_type
     *
     * @return $this
     */
    public function setErrorType($error_type)
    {
        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!in_array($error_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param string|null $object_type object_type
     *
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($object_type) && !in_array($object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets invalid_value
     *
     * @return string|null
     */
    public function getInvalidValue()
    {
        return $this->container['invalid_value'];
    }

    /**
     * Sets invalid_value
     *
     * @param string|null $invalid_value invalid_value
     *
     * @return $this
     */
    public function setInvalidValue($invalid_value)
    {
        $this->container['invalid_value'] = $invalid_value;

        return $this;
    }

    /**
     * Gets extra_context
     *
     * @return string|null
     */
    public function getExtraContext()
    {
        return $this->container['extra_context'];
    }

    /**
     * Sets extra_context
     *
     * @param string|null $extra_context extra_context
     *
     * @return $this
     */
    public function setExtraContext($extra_context)
    {
        $this->container['extra_context'] = $extra_context;

        return $this;
    }

    /**
     * Gets object_type_id
     *
     * @return string|null
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string|null $object_type_id object_type_id
     *
     * @return $this
     */
    public function setObjectTypeId($object_type_id)
    {
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets known_column_number
     *
     * @return int
     */
    public function getKnownColumnNumber()
    {
        return $this->container['known_column_number'];
    }

    /**
     * Sets known_column_number
     *
     * @param int $known_column_number known_column_number
     *
     * @return $this
     */
    public function setKnownColumnNumber($known_column_number)
    {
        $this->container['known_column_number'] = $known_column_number;

        return $this;
    }

    /**
     * Gets source_data
     *
     * @return \HubSpot\Client\Crm\Imports\Model\ImportRowCore
     */
    public function getSourceData()
    {
        return $this->container['source_data'];
    }

    /**
     * Sets source_data
     *
     * @param \HubSpot\Client\Crm\Imports\Model\ImportRowCore $source_data source_data
     *
     * @return $this
     */
    public function setSourceData($source_data)
    {
        $this->container['source_data'] = $source_data;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


