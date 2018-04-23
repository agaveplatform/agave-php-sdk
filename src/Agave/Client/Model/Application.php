<?php
/**
 * Application
 *
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Agave\Client\Model;

use \ArrayAccess;
use \Agave\Client\ObjectSerializer;

/**
 * Application Class Doc Comment
 *
 * @category Class
 * @description Applications are a self-describing representation of an executable software item. See the &lt;a href&#x3D;\&quot;http://agaveapi.co/documentation/tutorials/app-management-tutorial/\&quot;&gt;App Management Tutorial&lt;/a&gt; for more information.
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Application implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available' => 'string',
        'checkpointable' => 'string',
        'default_max_run_time' => 'string',
        'default_memory_per_node' => 'string',
        'default_node_count' => 'string',
        'default_processors_per_node' => 'string',
        'default_queue' => 'string',
        'deployment_path' => 'string',
        'deployment_system' => 'string',
        'execution_system' => 'string',
        'execution_type' => 'string',
        'help_uri' => 'string',
        'id' => 'string',
        'icon' => 'string',
        'inputs' => 'string',
        'label' => 'string',
        'last_modified' => 'string',
        'long_description' => 'string',
        'modules' => 'string',
        'name' => 'string',
        'ontology' => 'string',
        'outputs' => 'string',
        'parallelism' => 'string',
        'parameters' => 'string',
        'is_public' => 'string',
        'revision' => 'string',
        'short_description' => 'string',
        'tags' => 'string',
        'template_path' => 'string',
        'test_path' => 'string',
        'uuid' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available' => null,
        'checkpointable' => null,
        'default_max_run_time' => null,
        'default_memory_per_node' => null,
        'default_node_count' => null,
        'default_processors_per_node' => null,
        'default_queue' => null,
        'deployment_path' => null,
        'deployment_system' => null,
        'execution_system' => null,
        'execution_type' => null,
        'help_uri' => null,
        'id' => null,
        'icon' => null,
        'inputs' => null,
        'label' => null,
        'last_modified' => null,
        'long_description' => null,
        'modules' => null,
        'name' => null,
        'ontology' => null,
        'outputs' => null,
        'parallelism' => null,
        'parameters' => null,
        'is_public' => null,
        'revision' => null,
        'short_description' => null,
        'tags' => null,
        'template_path' => null,
        'test_path' => null,
        'uuid' => null,
        'version' => null
    ];

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
        'available' => 'available',
        'checkpointable' => 'checkpointable',
        'default_max_run_time' => 'defaultMaxRunTime',
        'default_memory_per_node' => 'defaultMemoryPerNode',
        'default_node_count' => 'defaultNodeCount',
        'default_processors_per_node' => 'defaultProcessorsPerNode',
        'default_queue' => 'defaultQueue',
        'deployment_path' => 'deploymentPath',
        'deployment_system' => 'deploymentSystem',
        'execution_system' => 'executionSystem',
        'execution_type' => 'executionType',
        'help_uri' => 'helpURI',
        'id' => 'id',
        'icon' => 'icon',
        'inputs' => 'inputs',
        'label' => 'label',
        'last_modified' => 'lastModified',
        'long_description' => 'longDescription',
        'modules' => 'modules',
        'name' => 'name',
        'ontology' => 'ontology',
        'outputs' => 'outputs',
        'parallelism' => 'parallelism',
        'parameters' => 'parameters',
        'is_public' => 'isPublic',
        'revision' => 'revision',
        'short_description' => 'shortDescription',
        'tags' => 'tags',
        'template_path' => 'templatePath',
        'test_path' => 'testPath',
        'uuid' => 'uuid',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'checkpointable' => 'setCheckpointable',
        'default_max_run_time' => 'setDefaultMaxRunTime',
        'default_memory_per_node' => 'setDefaultMemoryPerNode',
        'default_node_count' => 'setDefaultNodeCount',
        'default_processors_per_node' => 'setDefaultProcessorsPerNode',
        'default_queue' => 'setDefaultQueue',
        'deployment_path' => 'setDeploymentPath',
        'deployment_system' => 'setDeploymentSystem',
        'execution_system' => 'setExecutionSystem',
        'execution_type' => 'setExecutionType',
        'help_uri' => 'setHelpUri',
        'id' => 'setId',
        'icon' => 'setIcon',
        'inputs' => 'setInputs',
        'label' => 'setLabel',
        'last_modified' => 'setLastModified',
        'long_description' => 'setLongDescription',
        'modules' => 'setModules',
        'name' => 'setName',
        'ontology' => 'setOntology',
        'outputs' => 'setOutputs',
        'parallelism' => 'setParallelism',
        'parameters' => 'setParameters',
        'is_public' => 'setIsPublic',
        'revision' => 'setRevision',
        'short_description' => 'setShortDescription',
        'tags' => 'setTags',
        'template_path' => 'setTemplatePath',
        'test_path' => 'setTestPath',
        'uuid' => 'setUuid',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'checkpointable' => 'getCheckpointable',
        'default_max_run_time' => 'getDefaultMaxRunTime',
        'default_memory_per_node' => 'getDefaultMemoryPerNode',
        'default_node_count' => 'getDefaultNodeCount',
        'default_processors_per_node' => 'getDefaultProcessorsPerNode',
        'default_queue' => 'getDefaultQueue',
        'deployment_path' => 'getDeploymentPath',
        'deployment_system' => 'getDeploymentSystem',
        'execution_system' => 'getExecutionSystem',
        'execution_type' => 'getExecutionType',
        'help_uri' => 'getHelpUri',
        'id' => 'getId',
        'icon' => 'getIcon',
        'inputs' => 'getInputs',
        'label' => 'getLabel',
        'last_modified' => 'getLastModified',
        'long_description' => 'getLongDescription',
        'modules' => 'getModules',
        'name' => 'getName',
        'ontology' => 'getOntology',
        'outputs' => 'getOutputs',
        'parallelism' => 'getParallelism',
        'parameters' => 'getParameters',
        'is_public' => 'getIsPublic',
        'revision' => 'getRevision',
        'short_description' => 'getShortDescription',
        'tags' => 'getTags',
        'template_path' => 'getTemplatePath',
        'test_path' => 'getTestPath',
        'uuid' => 'getUuid',
        'version' => 'getVersion'
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
        return self::$swaggerModelName;
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
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['checkpointable'] = isset($data['checkpointable']) ? $data['checkpointable'] : null;
        $this->container['default_max_run_time'] = isset($data['default_max_run_time']) ? $data['default_max_run_time'] : null;
        $this->container['default_memory_per_node'] = isset($data['default_memory_per_node']) ? $data['default_memory_per_node'] : null;
        $this->container['default_node_count'] = isset($data['default_node_count']) ? $data['default_node_count'] : null;
        $this->container['default_processors_per_node'] = isset($data['default_processors_per_node']) ? $data['default_processors_per_node'] : null;
        $this->container['default_queue'] = isset($data['default_queue']) ? $data['default_queue'] : null;
        $this->container['deployment_path'] = isset($data['deployment_path']) ? $data['deployment_path'] : null;
        $this->container['deployment_system'] = isset($data['deployment_system']) ? $data['deployment_system'] : null;
        $this->container['execution_system'] = isset($data['execution_system']) ? $data['execution_system'] : null;
        $this->container['execution_type'] = isset($data['execution_type']) ? $data['execution_type'] : null;
        $this->container['help_uri'] = isset($data['help_uri']) ? $data['help_uri'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ontology'] = isset($data['ontology']) ? $data['ontology'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['parallelism'] = isset($data['parallelism']) ? $data['parallelism'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['template_path'] = isset($data['template_path']) ? $data['template_path'] : null;
        $this->container['test_path'] = isset($data['test_path']) ? $data['test_path'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['checkpointable'] === null) {
            $invalidProperties[] = "'checkpointable' can't be null";
        }
        if ($this->container['default_max_run_time'] === null) {
            $invalidProperties[] = "'default_max_run_time' can't be null";
        }
        if ($this->container['default_memory_per_node'] === null) {
            $invalidProperties[] = "'default_memory_per_node' can't be null";
        }
        if ($this->container['default_node_count'] === null) {
            $invalidProperties[] = "'default_node_count' can't be null";
        }
        if ($this->container['default_processors_per_node'] === null) {
            $invalidProperties[] = "'default_processors_per_node' can't be null";
        }
        if ($this->container['default_queue'] === null) {
            $invalidProperties[] = "'default_queue' can't be null";
        }
        if ($this->container['deployment_path'] === null) {
            $invalidProperties[] = "'deployment_path' can't be null";
        }
        if ($this->container['deployment_system'] === null) {
            $invalidProperties[] = "'deployment_system' can't be null";
        }
        if ($this->container['execution_system'] === null) {
            $invalidProperties[] = "'execution_system' can't be null";
        }
        if ($this->container['execution_type'] === null) {
            $invalidProperties[] = "'execution_type' can't be null";
        }
        if ($this->container['help_uri'] === null) {
            $invalidProperties[] = "'help_uri' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['last_modified'] === null) {
            $invalidProperties[] = "'last_modified' can't be null";
        }
        if ($this->container['long_description'] === null) {
            $invalidProperties[] = "'long_description' can't be null";
        }
        if ($this->container['modules'] === null) {
            $invalidProperties[] = "'modules' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ontology'] === null) {
            $invalidProperties[] = "'ontology' can't be null";
        }
        if ($this->container['outputs'] === null) {
            $invalidProperties[] = "'outputs' can't be null";
        }
        if ($this->container['parallelism'] === null) {
            $invalidProperties[] = "'parallelism' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['is_public'] === null) {
            $invalidProperties[] = "'is_public' can't be null";
        }
        if ($this->container['revision'] === null) {
            $invalidProperties[] = "'revision' can't be null";
        }
        if ($this->container['short_description'] === null) {
            $invalidProperties[] = "'short_description' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['template_path'] === null) {
            $invalidProperties[] = "'template_path' can't be null";
        }
        if ($this->container['test_path'] === null) {
            $invalidProperties[] = "'test_path' can't be null";
        }
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets available
     *
     * @return string
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string $available Whether the application is available.
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets checkpointable
     *
     * @return string
     */
    public function getCheckpointable()
    {
        return $this->container['checkpointable'];
    }

    /**
     * Sets checkpointable
     *
     * @param string $checkpointable Whether the application supports checkpointing.
     *
     * @return $this
     */
    public function setCheckpointable($checkpointable)
    {
        $this->container['checkpointable'] = $checkpointable;

        return $this;
    }

    /**
     * Gets default_max_run_time
     *
     * @return string
     */
    public function getDefaultMaxRunTime()
    {
        return $this->container['default_max_run_time'];
    }

    /**
     * Sets default_max_run_time
     *
     * @param string $default_max_run_time The max execution time that should be used if none is given in a job description. Ignore if the system does not support schedulers.
     *
     * @return $this
     */
    public function setDefaultMaxRunTime($default_max_run_time)
    {
        $this->container['default_max_run_time'] = $default_max_run_time;

        return $this;
    }

    /**
     * Gets default_memory_per_node
     *
     * @return string
     */
    public function getDefaultMemoryPerNode()
    {
        return $this->container['default_memory_per_node'];
    }

    /**
     * Sets default_memory_per_node
     *
     * @param string $default_memory_per_node The default memory in GB to pass to the scheduler if none is given in the job description. This must be less than the max memory parameter in the target queue definition.
     *
     * @return $this
     */
    public function setDefaultMemoryPerNode($default_memory_per_node)
    {
        $this->container['default_memory_per_node'] = $default_memory_per_node;

        return $this;
    }

    /**
     * Gets default_node_count
     *
     * @return string
     */
    public function getDefaultNodeCount()
    {
        return $this->container['default_node_count'];
    }

    /**
     * Sets default_node_count
     *
     * @param string $default_node_count The number of nodes that should be used if none is given in a job description. Ignore if the system does not support schedulers.
     *
     * @return $this
     */
    public function setDefaultNodeCount($default_node_count)
    {
        $this->container['default_node_count'] = $default_node_count;

        return $this;
    }

    /**
     * Gets default_processors_per_node
     *
     * @return string
     */
    public function getDefaultProcessorsPerNode()
    {
        return $this->container['default_processors_per_node'];
    }

    /**
     * Sets default_processors_per_node
     *
     * @param string $default_processors_per_node The number of processors to pass to the scheduler if none are given in the job description. This must be 1 if the app is serial.
     *
     * @return $this
     */
    public function setDefaultProcessorsPerNode($default_processors_per_node)
    {
        $this->container['default_processors_per_node'] = $default_processors_per_node;

        return $this;
    }

    /**
     * Gets default_queue
     *
     * @return string
     */
    public function getDefaultQueue()
    {
        return $this->container['default_queue'];
    }

    /**
     * Sets default_queue
     *
     * @param string $default_queue The queue on the execution system that should be used if none is given in a job description. Ignore if the system does not support schedulers.
     *
     * @return $this
     */
    public function setDefaultQueue($default_queue)
    {
        $this->container['default_queue'] = $default_queue;

        return $this;
    }

    /**
     * Gets deployment_path
     *
     * @return string
     */
    public function getDeploymentPath()
    {
        return $this->container['deployment_path'];
    }

    /**
     * Sets deployment_path
     *
     * @param string $deployment_path The location in default storage system containing the application wrapper and dependencies of the user
     *
     * @return $this
     */
    public function setDeploymentPath($deployment_path)
    {
        $this->container['deployment_path'] = $deployment_path;

        return $this;
    }

    /**
     * Gets deployment_system
     *
     * @return string
     */
    public function getDeploymentSystem()
    {
        return $this->container['deployment_system'];
    }

    /**
     * Sets deployment_system
     *
     * @param string $deployment_system The system id of the storage system where this app should run.
     *
     * @return $this
     */
    public function setDeploymentSystem($deployment_system)
    {
        $this->container['deployment_system'] = $deployment_system;

        return $this;
    }

    /**
     * Gets execution_system
     *
     * @return string
     */
    public function getExecutionSystem()
    {
        return $this->container['execution_system'];
    }

    /**
     * Sets execution_system
     *
     * @param string $execution_system The system id of the execution system where this app should run.
     *
     * @return $this
     */
    public function setExecutionSystem($execution_system)
    {
        $this->container['execution_system'] = $execution_system;

        return $this;
    }

    /**
     * Gets execution_type
     *
     * @return string
     */
    public function getExecutionType()
    {
        return $this->container['execution_type'];
    }

    /**
     * Sets execution_type
     *
     * @param string $execution_type The execution type of the application. If you're unsure, it's probably HPC.
     *
     * @return $this
     */
    public function setExecutionType($execution_type)
    {
        $this->container['execution_type'] = $execution_type;

        return $this;
    }

    /**
     * Gets help_uri
     *
     * @return string
     */
    public function getHelpUri()
    {
        return $this->container['help_uri'];
    }

    /**
     * Sets help_uri
     *
     * @param string $help_uri The URL where users can go for more information about the app.
     *
     * @return $this
     */
    public function setHelpUri($help_uri)
    {
        $this->container['help_uri'] = $help_uri;

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
     * @param string $id Unique id of this app. Comprised of the app name-version.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon The icon to associate with this app.
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return string
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param string $inputs The inputs files for this application.
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The label to use when generating forms.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified The date this application was last modified in ISO 8601 format.
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets long_description
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['long_description'];
    }

    /**
     * Sets long_description
     *
     * @param string $long_description The full text description of this input to use when generating forms.
     *
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return string
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param string $modules An array of modules to load prior to the execution of the application.
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the application. The name does not have to be unique, but the combination of name and version does.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ontology
     *
     * @return string
     */
    public function getOntology()
    {
        return $this->container['ontology'];
    }

    /**
     * Sets ontology
     *
     * @param string $ontology An array of ontology values describing this application.
     *
     * @return $this
     */
    public function setOntology($ontology)
    {
        $this->container['ontology'] = $ontology;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return string
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param string $outputs The outputs files for this application.
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets parallelism
     *
     * @return string
     */
    public function getParallelism()
    {
        return $this->container['parallelism'];
    }

    /**
     * Sets parallelism
     *
     * @param string $parallelism The parallelism type of the application. If you're unsure, it's probably SERIAL.
     *
     * @return $this
     */
    public function setParallelism($parallelism)
    {
        $this->container['parallelism'] = $parallelism;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param string $parameters The inputs parameters for this application.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return string
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param string $is_public Whether the application is public or private.
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision The number of times this application has been revised.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description The short description of this application.
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string $tags An array of tags related to this application.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets template_path
     *
     * @return string
     */
    public function getTemplatePath()
    {
        return $this->container['template_path'];
    }

    /**
     * Sets template_path
     *
     * @param string $template_path The path to the wrapper script relative to the deploymentPath.
     *
     * @return $this
     */
    public function setTemplatePath($template_path)
    {
        $this->container['template_path'] = $template_path;

        return $this;
    }

    /**
     * Gets test_path
     *
     * @return string
     */
    public function getTestPath()
    {
        return $this->container['test_path'];
    }

    /**
     * Sets test_path
     *
     * @param string $test_path The path to the test script relative to the deploymentPath.
     *
     * @return $this
     */
    public function setTestPath($test_path)
    {
        $this->container['test_path'] = $test_path;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The UUID of this application. UUID are 36 alphanumeric string.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The version of the application in #.#.# format. While the version does not need to be unique, the combination of name and version does have to be unique.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


