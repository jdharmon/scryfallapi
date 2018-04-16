<?php
namespace Scryfall;
final class Catalog
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_GetCardNames_operation = $_client->createOperation('Catalog_GetCardNames');
        $this->_GetWordBank_operation = $_client->createOperation('Catalog_GetWordBank');
        $this->_GetCreatureTypes_operation = $_client->createOperation('Catalog_GetCreatureTypes');
        $this->_GetPlaneswalkerTypes_operation = $_client->createOperation('Catalog_GetPlaneswalkerTypes');
        $this->_GetLandTypes_operation = $_client->createOperation('Catalog_GetLandTypes');
        $this->_GetArtifactTypes_operation = $_client->createOperation('Catalog_GetArtifactTypes');
        $this->_GetEnchantmentTypes_operation = $_client->createOperation('Catalog_GetEnchantmentTypes');
        $this->_GetSpellTypes_operation = $_client->createOperation('Catalog_GetSpellTypes');
        $this->_GetPowers_operation = $_client->createOperation('Catalog_GetPowers');
        $this->_GetToughnesses_operation = $_client->createOperation('Catalog_GetToughnesses');
        $this->_GetLoyalties_operation = $_client->createOperation('Catalog_GetLoyalties');
        $this->_GetWatermarks_operation = $_client->createOperation('Catalog_GetWatermarks');
    }
    /**
     * @return array
     */
    public function getCardNames()
    {
        return $this->_GetCardNames_operation->call([]);
    }
    /**
     * @return array
     */
    public function getWordBank()
    {
        return $this->_GetWordBank_operation->call([]);
    }
    /**
     * @return array
     */
    public function getCreatureTypes()
    {
        return $this->_GetCreatureTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getPlaneswalkerTypes()
    {
        return $this->_GetPlaneswalkerTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getLandTypes()
    {
        return $this->_GetLandTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getArtifactTypes()
    {
        return $this->_GetArtifactTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getEnchantmentTypes()
    {
        return $this->_GetEnchantmentTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getSpellTypes()
    {
        return $this->_GetSpellTypes_operation->call([]);
    }
    /**
     * @return array
     */
    public function getPowers()
    {
        return $this->_GetPowers_operation->call([]);
    }
    /**
     * @return array
     */
    public function getToughnesses()
    {
        return $this->_GetToughnesses_operation->call([]);
    }
    /**
     * @return array
     */
    public function getLoyalties()
    {
        return $this->_GetLoyalties_operation->call([]);
    }
    /**
     * @return array
     */
    public function getWatermarks()
    {
        return $this->_GetWatermarks_operation->call([]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetCardNames_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetWordBank_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetCreatureTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetPlaneswalkerTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetLandTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetArtifactTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetEnchantmentTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetSpellTypes_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetPowers_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetToughnesses_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetLoyalties_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetWatermarks_operation;
}
