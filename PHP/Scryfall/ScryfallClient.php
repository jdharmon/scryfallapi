<?php
namespace Scryfall;
final class ScryfallClient
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_Sets_group = new \Scryfall\Sets($_client);
        $this->_Cards_group = new \Scryfall\Cards($_client);
        $this->_Rulings_group = new \Scryfall\Rulings($_client);
        $this->_Symbology_group = new \Scryfall\Symbology($_client);
        $this->_Catalog_group = new \Scryfall\Catalog($_client);
    }
    /**
     * @return \Scryfall\Sets
     */
    public function getSets()
    {
        return $this->_Sets_group;
    }
    /**
     * @return \Scryfall\Cards
     */
    public function getCards()
    {
        return $this->_Cards_group;
    }
    /**
     * @return \Scryfall\Rulings
     */
    public function getRulings()
    {
        return $this->_Rulings_group;
    }
    /**
     * @return \Scryfall\Symbology
     */
    public function getSymbology()
    {
        return $this->_Symbology_group;
    }
    /**
     * @return \Scryfall\Catalog
     */
    public function getCatalog()
    {
        return $this->_Catalog_group;
    }
    /**
     * @var \Scryfall\Sets
     */
    private $_Sets_group;
    /**
     * @var \Scryfall\Cards
     */
    private $_Cards_group;
    /**
     * @var \Scryfall\Rulings
     */
    private $_Rulings_group;
    /**
     * @var \Scryfall\Symbology
     */
    private $_Symbology_group;
    /**
     * @var \Scryfall\Catalog
     */
    private $_Catalog_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'api.scryfall.com',
        'paths' => [
            '/sets' => ['get' => [
                'operationId' => 'Sets_GetAll',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/set_list']]]
            ]],
            '/sets/{code}' => ['get' => [
                'operationId' => 'Sets_GetByCode',
                'parameters' => [[
                    'name' => 'code',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/set']]]
            ]],
            '/cards' => ['get' => [
                'operationId' => 'Cards_GetAll',
                'parameters' => [[
                    'name' => 'page',
                    'in' => 'query',
                    'required' => FALSE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card_list']]]
            ]],
            '/cards/search' => ['get' => [
                'operationId' => 'Cards_Search',
                'parameters' => [
                    [
                        'name' => 'q',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'unique',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'cards',
                            'art',
                            'prints'
                        ]
                    ],
                    [
                        'name' => 'order',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'name',
                            'set',
                            'released',
                            'rarity',
                            'color',
                            'usd',
                            'tix',
                            'eur',
                            'cmc',
                            'power',
                            'toughness',
                            'edhrec',
                            'artist'
                        ]
                    ],
                    [
                        'name' => 'dir',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'auto',
                            'asc',
                            'desc'
                        ]
                    ],
                    [
                        'name' => 'include_extras',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'boolean'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card_list']]]
            ]],
            '/cards/named' => ['get' => [
                'operationId' => 'Cards_GetNamed',
                'parameters' => [
                    [
                        'name' => 'exact',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'fuzzy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'set',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'format',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'face',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'version',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'pretty',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'boolean'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/autocomplete' => ['get' => [
                'operationId' => 'Cards_Autocomplete',
                'parameters' => [[
                    'name' => 'q',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/cards/random' => ['get' => [
                'operationId' => 'Cards_GetRandom',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/multiverse/{id}' => ['get' => [
                'operationId' => 'Cards_GetByMultiverseId',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/mtgo/{id}' => ['get' => [
                'operationId' => 'Cards_GetByMtgoId',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/{code}/{number}' => ['get' => [
                'operationId' => 'Cards_GetByCodeByNumber',
                'parameters' => [
                    [
                        'name' => 'code',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'number',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/{id}' => ['get' => [
                'operationId' => 'Cards_GetById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string',
                    'format' => 'uuid'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card']]]
            ]],
            '/cards/multiverse/{id}/rulings' => ['get' => [
                'operationId' => 'Rulings_GetByMultiverseId',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ruling_list']]]
            ]],
            '/cards/mtgo/{id}/rulings' => ['get' => [
                'operationId' => 'Rulings_GetByMtgoId',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ruling_list']]]
            ]],
            '/cards/{code}/{number}/rulings' => ['get' => [
                'operationId' => 'Rulings_GetByCodeByNumberId',
                'parameters' => [
                    [
                        'name' => 'code',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'number',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ruling_list']]]
            ]],
            '/cards/{id}/rulings' => ['get' => [
                'operationId' => 'Rulings_GetById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string',
                    'format' => 'uuid'
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ruling_list']]]
            ]],
            '/symbology' => ['get' => [
                'operationId' => 'Symbology_GetAll',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/card_symbol_list']]]
            ]],
            '/symbology/parse-mana' => ['get' => [
                'operationId' => 'Symbology_ParseMana',
                'parameters' => [[
                    'name' => 'cost',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => ['201' => ['schema' => ['$ref' => '#/definitions/mana_cost']]]
            ]],
            '/catalog/card-names' => ['get' => [
                'operationId' => 'Catalog_GetCardNames',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/word-bank' => ['get' => [
                'operationId' => 'Catalog_GetWordBank',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/creature-types' => ['get' => [
                'operationId' => 'Catalog_GetCreatureTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/planeswalker-types' => ['get' => [
                'operationId' => 'Catalog_GetPlaneswalkerTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/land-types' => ['get' => [
                'operationId' => 'Catalog_GetLandTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/artifact-types' => ['get' => [
                'operationId' => 'Catalog_GetArtifactTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/enchantment-types' => ['get' => [
                'operationId' => 'Catalog_GetEnchantmentTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/spell-types' => ['get' => [
                'operationId' => 'Catalog_GetSpellTypes',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/powers' => ['get' => [
                'operationId' => 'Catalog_GetPowers',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/thoughnesses' => ['get' => [
                'operationId' => 'Catalog_GetToughnesses',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/loyalties' => ['get' => [
                'operationId' => 'Catalog_GetLoyalties',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]],
            '/catalog/watermarks' => ['get' => [
                'operationId' => 'Catalog_GetWatermarks',
                'parameters' => [],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/catalog']]]
            ]]
        ],
        'definitions' => [
            'related_cards' => [
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    'name' => ['type' => 'string'],
                    'uri' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'image_uri' => [
                'properties' => [
                    'small' => ['type' => 'string'],
                    'normal' => ['type' => 'string'],
                    'large' => ['type' => 'string'],
                    'png' => ['type' => 'string'],
                    'art_crop' => ['type' => 'string'],
                    'border_crop' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'card_face' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'type_line' => ['type' => 'string'],
                    'oracle_text' => ['type' => 'string'],
                    'mana_cost' => ['type' => 'string'],
                    'colors' => [
                        'type' => 'string',
                        'enum' => [
                            'W',
                            'U',
                            'B',
                            'R',
                            'G'
                        ]
                    ],
                    'color_indicator' => [
                        'type' => 'string',
                        'enum' => [
                            'W',
                            'U',
                            'B',
                            'R',
                            'G'
                        ]
                    ],
                    'power' => ['type' => 'string'],
                    'toughness' => ['type' => 'string'],
                    'loyalty' => ['type' => 'string'],
                    'flavor_text' => ['type' => 'string'],
                    'illustration_id' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    'image_uris' => ['$ref' => '#/definitions/image_uri']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'legality' => [
                'properties' => [
                    'standard' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'future' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'frontier' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'modern' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'legacy' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'pauper' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'vintage' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'penny' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'commander' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    '1v1' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'duel' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ],
                    'brawl' => [
                        'type' => 'string',
                        'enum' => [
                            'legal',
                            'not_legal'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'card' => [
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    'oracle_id' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    'multiverse_ids' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'mtgo_id' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'mtgo_foil_id' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'uri' => ['type' => 'string'],
                    'scryfall_uri' => ['type' => 'string'],
                    'prints_search_uri' => ['type' => 'string'],
                    'rulings_uri' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'layout' => [
                        'type' => 'string',
                        'enum' => [
                            'normal',
                            'split',
                            'transform',
                            'meld',
                            'leveler',
                            'saga',
                            'planar',
                            'scheme',
                            'vanguard',
                            'token',
                            'double_faced_token',
                            'emblem',
                            'augment',
                            'host'
                        ]
                    ],
                    'cmc' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'type_line' => ['type' => 'string'],
                    'oracle_text' => ['type' => 'string'],
                    'mana_cost' => ['type' => 'string'],
                    'power' => ['type' => 'string'],
                    'toughness' => ['type' => 'string'],
                    'loyalty' => ['type' => 'string'],
                    'life_modifier' => ['type' => 'string'],
                    'hand_modifier' => ['type' => 'string'],
                    'colors' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'W',
                                'U',
                                'B',
                                'R',
                                'G'
                            ]
                        ]
                    ],
                    'color_indicator' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'W',
                                'U',
                                'B',
                                'R',
                                'G'
                            ]
                        ]
                    ],
                    'color_identity' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'W',
                                'U',
                                'B',
                                'R',
                                'G'
                            ]
                        ]
                    ],
                    'all_parts' => ['$ref' => '#/definitions/related_cards'],
                    'card_faces' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/card_face']
                    ],
                    'legalities' => ['$ref' => '#/definitions/legality'],
                    'reserved' => ['type' => 'boolean'],
                    'edhrec_rank' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'set' => ['type' => 'string'],
                    'set_name' => ['type' => 'string'],
                    'collector_number' => ['type' => 'string'],
                    'set_search_uri' => ['type' => 'string'],
                    'scryfall_set_uri' => ['type' => 'string'],
                    'image_uris' => ['$ref' => '#/definitions/image_uri'],
                    'highres_image' => ['type' => 'boolean'],
                    'reprint' => ['type' => 'boolean'],
                    'digital' => ['type' => 'boolean'],
                    'rarity' => [
                        'type' => 'string',
                        'enum' => [
                            'common',
                            'uncommon',
                            'rare',
                            'mythic'
                        ]
                    ],
                    'flavor_text' => ['type' => 'string'],
                    'artist' => ['type' => 'string'],
                    'illustration_id' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    'frame' => ['type' => 'string'],
                    'full_art' => ['type' => 'boolean'],
                    'watermark' => ['type' => 'string'],
                    'border_color' => [
                        'type' => 'string',
                        'enum' => [
                            'black',
                            'borderless',
                            'gold',
                            'silver',
                            'white'
                        ]
                    ],
                    'story_spotlight_number' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'story_spotlight_uri' => ['type' => 'string'],
                    'timeshifted' => ['type' => 'boolean'],
                    'colorshifted' => ['type' => 'boolean'],
                    'futureshifted' => ['type' => 'boolean'],
                    'purchase_uris' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ],
                    'related_uris' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'catalog' => [
                'properties' => [
                    'total_items' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'data' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'set' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'mtgo_code' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'set_type' => [
                        'type' => 'string',
                        'enum' => [
                            'core',
                            'expansion',
                            'masters',
                            'masterpiece',
                            'from_the_vault',
                            'spellbook',
                            'premium_deck',
                            'duel_deck',
                            'commander',
                            'planechase',
                            'conspiracy',
                            'archenemy',
                            'vanguard',
                            'funny',
                            'starter',
                            'box',
                            'promo',
                            'token',
                            'memorabilia',
                            'treasure_chest'
                        ]
                    ],
                    'released_at' => [
                        'type' => 'string',
                        'format' => 'date'
                    ],
                    'block_code' => ['type' => 'string'],
                    'block' => ['type' => 'string'],
                    'parent_set_code' => ['type' => 'string'],
                    'card_count' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'digital' => ['type' => 'boolean'],
                    'foil' => ['type' => 'boolean'],
                    'icon_svg_uri' => ['type' => 'string'],
                    'search_uri' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ruling' => [
                'properties' => [
                    'source' => ['type' => 'string'],
                    'published_at' => [
                        'type' => 'string',
                        'format' => 'date'
                    ],
                    'comment' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'card_symbol' => [
                'properties' => [
                    'symbol' => ['type' => 'string'],
                    'loose_variant' => ['type' => 'string'],
                    'english' => ['type' => 'string'],
                    'transposable' => ['type' => 'boolean'],
                    'represents_mana' => ['type' => 'boolean'],
                    'cmc' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'appears_in_mana_costs' => ['type' => 'boolean'],
                    'funny' => ['type' => 'boolean'],
                    'colors' => [
                        'type' => 'string',
                        'enum' => [
                            'W',
                            'U',
                            'B',
                            'R',
                            'G'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'mana_cost' => [
                'properties' => [
                    'cost' => ['type' => 'string'],
                    'cmc' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'colors' => [
                        'type' => 'string',
                        'enum' => [
                            'W',
                            'U',
                            'B',
                            'R',
                            'G'
                        ]
                    ],
                    'colorless' => ['type' => 'boolean'],
                    'monocolored' => ['type' => 'boolean'],
                    'multicolored' => ['type' => 'boolean']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'card_list' => [
                'properties' => [
                    'total_cards' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'has_more' => ['type' => 'boolean'],
                    'next_page' => ['type' => 'string'],
                    'data' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/card']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'set_list' => [
                'properties' => ['data' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/set']
                ]],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ruling_list' => [
                'properties' => ['data' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ruling']
                ]],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'card_symbol_list' => [
                'properties' => ['data' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/card_symbol']
                ]],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'error' => [
                'properties' => [
                    'status' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'code' => ['type' => 'string'],
                    'details' => ['type' => 'string'],
                    'type' => ['type' => 'string'],
                    'warnings' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ]
        ]
    ];
}
