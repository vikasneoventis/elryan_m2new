<?php
namespace Codazon\ThemeOptions\Model\ResourceModel\Config\Collection;

/**
 * Factory class for @see \Codazon\ThemeOptions\Model\ResourceModel\Config\Collection\Scoped
 */
class ScopedFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Codazon\\ThemeOptions\\Model\\ResourceModel\\Config\\Collection\\Scoped')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Codazon\ThemeOptions\Model\ResourceModel\Config\Collection\Scoped
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
