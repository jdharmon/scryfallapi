<?php
namespace Scryfall;
final class Symbology
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_GetAll_operation = $_client->createOperation('Symbology_GetAll');
        $this->_ParseMana_operation = $_client->createOperation('Symbology_ParseMana');
    }
    /**
     * @return array
     */
    public function getAll()
    {
        return $this->_GetAll_operation->call([]);
    }
    /**
     * @param string $cost
     * @return array
     */
    public function parseMana($cost)
    {
        return $this->_ParseMana_operation->call(['cost' => $cost]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAll_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ParseMana_operation;
}
