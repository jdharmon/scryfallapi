<?php
namespace Scryfall;
final class Cards
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_GetAll_operation = $_client->createOperation('Cards_GetAll');
        $this->_Search_operation = $_client->createOperation('Cards_Search');
        $this->_GetNamed_operation = $_client->createOperation('Cards_GetNamed');
        $this->_Autocomplete_operation = $_client->createOperation('Cards_Autocomplete');
        $this->_GetRandom_operation = $_client->createOperation('Cards_GetRandom');
        $this->_GetByMultiverseId_operation = $_client->createOperation('Cards_GetByMultiverseId');
        $this->_GetByMtgoId_operation = $_client->createOperation('Cards_GetByMtgoId');
        $this->_GetByCodeByNumber_operation = $_client->createOperation('Cards_GetByCodeByNumber');
        $this->_GetById_operation = $_client->createOperation('Cards_GetById');
    }
    /**
     * @param integer|null $page
     * @return array
     */
    public function getAll($page = null)
    {
        return $this->_GetAll_operation->call(['page' => $page]);
    }
    /**
     * @param string $q
     * @param string|null $unique
     * @param string|null $order
     * @param string|null $dir
     * @param boolean|null $include_extras
     * @param integer|null $page
     * @return array
     */
    public function search(
        $q,
        $unique = null,
        $order = null,
        $dir = null,
        $include_extras = null,
        $page = null
    )
    {
        return $this->_Search_operation->call([
            'q' => $q,
            'unique' => $unique,
            'order' => $order,
            'dir' => $dir,
            'include_extras' => $include_extras,
            'page' => $page
        ]);
    }
    /**
     * @param string|null $exact
     * @param string|null $fuzzy
     * @param string|null $set
     * @param string|null $format
     * @param string|null $face
     * @param string|null $version
     * @param boolean|null $pretty
     * @return array
     */
    public function getNamed(
        $exact = null,
        $fuzzy = null,
        $set = null,
        $format = null,
        $face = null,
        $version = null,
        $pretty = null
    )
    {
        return $this->_GetNamed_operation->call([
            'exact' => $exact,
            'fuzzy' => $fuzzy,
            'set' => $set,
            'format' => $format,
            'face' => $face,
            'version' => $version,
            'pretty' => $pretty
        ]);
    }
    /**
     * @param string $q
     * @return array
     */
    public function autocomplete($q)
    {
        return $this->_Autocomplete_operation->call(['q' => $q]);
    }
    /**
     * @return array
     */
    public function getRandom()
    {
        return $this->_GetRandom_operation->call([]);
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
    public function getByCodeByNumber(
        $code,
        $number
    )
    {
        return $this->_GetByCodeByNumber_operation->call([
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
    private $_GetAll_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Search_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetNamed_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Autocomplete_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetRandom_operation;
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
    private $_GetByCodeByNumber_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetById_operation;
}
