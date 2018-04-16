<?php
namespace Scryfall;
final class Sets
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_GetAll_operation = $_client->createOperation('Sets_GetAll');
        $this->_GetByCode_operation = $_client->createOperation('Sets_GetByCode');
    }
    /**
     * @return array
     */
    public function getAll()
    {
        return $this->_GetAll_operation->call([]);
    }
    /**
     * @param string $code
     * @return array
     */
    public function getByCode($code)
    {
        return $this->_GetByCode_operation->call(['code' => $code]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAll_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetByCode_operation;
}
