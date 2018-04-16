<?php
namespace Scryfall;
final class Rulings
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_GetByMultiverseId_operation = $_client->createOperation('Rulings_GetByMultiverseId');
        $this->_GetByMtgoId_operation = $_client->createOperation('Rulings_GetByMtgoId');
        $this->_GetByCodeByNumberId_operation = $_client->createOperation('Rulings_GetByCodeByNumberId');
        $this->_GetById_operation = $_client->createOperation('Rulings_GetById');
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getByMultiverseId($id)
    {
        return $this->_GetByMultiverseId_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getByMtgoId($id)
    {
        return $this->_GetByMtgoId_operation->call(['id' => $id]);
    }
    /**
     * @param string $code
     * @param integer $number
     * @return array
     */
    public function getByCodeByNumberId(
        $code,
        $number
    )
    {
        return $this->_GetByCodeByNumberId_operation->call([
            'code' => $code,
            'number' => $number
        ]);
    }
    /**
     * @param string $id
     * @return array
     */
    public function getById($id)
    {
        return $this->_GetById_operation->call(['id' => $id]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetByMultiverseId_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetByMtgoId_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetByCodeByNumberId_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetById_operation;
}
