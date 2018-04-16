package scryfall

// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is regenerated.

import (
    "encoding/json"
    "github.com/Azure/go-autorest/autorest"
    "github.com/Azure/go-autorest/autorest/date"
    "github.com/satori/go.uuid"
)

        // BorderColors enumerates the values for border colors.
    type BorderColors string

    const (
                // Black ...
        Black BorderColors = "black"
                // Borderless ...
        Borderless BorderColors = "borderless"
                // Gold ...
        Gold BorderColors = "gold"
                // Silver ...
        Silver BorderColors = "silver"
                // White ...
        White BorderColors = "white"
            )
    // PossibleBorderColorsValues returns an array of possible values for the BorderColors const type.
    func PossibleBorderColorsValues() []BorderColors {
        return []BorderColors{Black,Borderless,Gold,Silver,White}
    }

        // Colors enumerates the values for colors.
    type Colors string

    const (
                // B ...
        B Colors = "B"
                // G ...
        G Colors = "G"
                // R ...
        R Colors = "R"
                // U ...
        U Colors = "U"
                // W ...
        W Colors = "W"
            )
    // PossibleColorsValues returns an array of possible values for the Colors const type.
    func PossibleColorsValues() []Colors {
        return []Colors{B,G,R,U,W}
    }

        // Layouts enumerates the values for layouts.
    type Layouts string

    const (
                // Augment ...
        Augment Layouts = "augment"
                // DoubleFacedToken ...
        DoubleFacedToken Layouts = "double_faced_token"
                // Emblem ...
        Emblem Layouts = "emblem"
                // Host ...
        Host Layouts = "host"
                // Leveler ...
        Leveler Layouts = "leveler"
                // Meld ...
        Meld Layouts = "meld"
                // Normal ...
        Normal Layouts = "normal"
                // Planar ...
        Planar Layouts = "planar"
                // Saga ...
        Saga Layouts = "saga"
                // Scheme ...
        Scheme Layouts = "scheme"
                // Split ...
        Split Layouts = "split"
                // Token ...
        Token Layouts = "token"
                // Transform ...
        Transform Layouts = "transform"
                // Vanguard ...
        Vanguard Layouts = "vanguard"
            )
    // PossibleLayoutsValues returns an array of possible values for the Layouts const type.
    func PossibleLayoutsValues() []Layouts {
        return []Layouts{Augment,DoubleFacedToken,Emblem,Host,Leveler,Meld,Normal,Planar,Saga,Scheme,Split,Token,Transform,Vanguard}
    }

        // LegalStatus enumerates the values for legal status.
    type LegalStatus string

    const (
                // Legal ...
        Legal LegalStatus = "legal"
                // NotLegal ...
        NotLegal LegalStatus = "not_legal"
            )
    // PossibleLegalStatusValues returns an array of possible values for the LegalStatus const type.
    func PossibleLegalStatusValues() []LegalStatus {
        return []LegalStatus{Legal,NotLegal}
    }

        // Rarity enumerates the values for rarity.
    type Rarity string

    const (
                // Common ...
        Common Rarity = "common"
                // Mythic ...
        Mythic Rarity = "mythic"
                // Rare ...
        Rare Rarity = "rare"
                // Uncommon ...
        Uncommon Rarity = "uncommon"
            )
    // PossibleRarityValues returns an array of possible values for the Rarity const type.
    func PossibleRarityValues() []Rarity {
        return []Rarity{Common,Mythic,Rare,Uncommon}
    }

        // SetTypes enumerates the values for set types.
    type SetTypes string

    const (
                // SetTypesArchenemy ...
        SetTypesArchenemy SetTypes = "archenemy"
                // SetTypesBox ...
        SetTypesBox SetTypes = "box"
                // SetTypesCommander ...
        SetTypesCommander SetTypes = "commander"
                // SetTypesConspiracy ...
        SetTypesConspiracy SetTypes = "conspiracy"
                // SetTypesCore ...
        SetTypesCore SetTypes = "core"
                // SetTypesDuelDeck ...
        SetTypesDuelDeck SetTypes = "duel_deck"
                // SetTypesExpansion ...
        SetTypesExpansion SetTypes = "expansion"
                // SetTypesFromTheVault ...
        SetTypesFromTheVault SetTypes = "from_the_vault"
                // SetTypesFunny ...
        SetTypesFunny SetTypes = "funny"
                // SetTypesMasterpiece ...
        SetTypesMasterpiece SetTypes = "masterpiece"
                // SetTypesMasters ...
        SetTypesMasters SetTypes = "masters"
                // SetTypesMemorabilia ...
        SetTypesMemorabilia SetTypes = "memorabilia"
                // SetTypesPlanechase ...
        SetTypesPlanechase SetTypes = "planechase"
                // SetTypesPremiumDeck ...
        SetTypesPremiumDeck SetTypes = "premium_deck"
                // SetTypesPromo ...
        SetTypesPromo SetTypes = "promo"
                // SetTypesSpellbook ...
        SetTypesSpellbook SetTypes = "spellbook"
                // SetTypesStarter ...
        SetTypesStarter SetTypes = "starter"
                // SetTypesToken ...
        SetTypesToken SetTypes = "token"
                // SetTypesTreasureChest ...
        SetTypesTreasureChest SetTypes = "treasure_chest"
                // SetTypesVanguard ...
        SetTypesVanguard SetTypes = "vanguard"
            )
    // PossibleSetTypesValues returns an array of possible values for the SetTypes const type.
    func PossibleSetTypesValues() []SetTypes {
        return []SetTypes{SetTypesArchenemy,SetTypesBox,SetTypesCommander,SetTypesConspiracy,SetTypesCore,SetTypesDuelDeck,SetTypesExpansion,SetTypesFromTheVault,SetTypesFunny,SetTypesMasterpiece,SetTypesMasters,SetTypesMemorabilia,SetTypesPlanechase,SetTypesPremiumDeck,SetTypesPromo,SetTypesSpellbook,SetTypesStarter,SetTypesToken,SetTypesTreasureChest,SetTypesVanguard}
    }

        // SortDirection enumerates the values for sort direction.
    type SortDirection string

    const (
                // Asc ...
        Asc SortDirection = "asc"
                // Auto ...
        Auto SortDirection = "auto"
                // Desc ...
        Desc SortDirection = "desc"
            )
    // PossibleSortDirectionValues returns an array of possible values for the SortDirection const type.
    func PossibleSortDirectionValues() []SortDirection {
        return []SortDirection{Asc,Auto,Desc}
    }

        // SortOrder enumerates the values for sort order.
    type SortOrder string

    const (
                // SortOrderArtist ...
        SortOrderArtist SortOrder = "artist"
                // SortOrderCmc ...
        SortOrderCmc SortOrder = "cmc"
                // SortOrderColor ...
        SortOrderColor SortOrder = "color"
                // SortOrderEdhrec ...
        SortOrderEdhrec SortOrder = "edhrec"
                // SortOrderEur ...
        SortOrderEur SortOrder = "eur"
                // SortOrderName ...
        SortOrderName SortOrder = "name"
                // SortOrderPower ...
        SortOrderPower SortOrder = "power"
                // SortOrderRarity ...
        SortOrderRarity SortOrder = "rarity"
                // SortOrderReleased ...
        SortOrderReleased SortOrder = "released"
                // SortOrderSet ...
        SortOrderSet SortOrder = "set"
                // SortOrderTix ...
        SortOrderTix SortOrder = "tix"
                // SortOrderToughness ...
        SortOrderToughness SortOrder = "toughness"
                // SortOrderUsd ...
        SortOrderUsd SortOrder = "usd"
            )
    // PossibleSortOrderValues returns an array of possible values for the SortOrder const type.
    func PossibleSortOrderValues() []SortOrder {
        return []SortOrder{SortOrderArtist,SortOrderCmc,SortOrderColor,SortOrderEdhrec,SortOrderEur,SortOrderName,SortOrderPower,SortOrderRarity,SortOrderReleased,SortOrderSet,SortOrderTix,SortOrderToughness,SortOrderUsd}
    }

        // UniqueStrategy enumerates the values for unique strategy.
    type UniqueStrategy string

    const (
                // Art ...
        Art UniqueStrategy = "art"
                // Cards ...
        Cards UniqueStrategy = "cards"
                // Prints ...
        Prints UniqueStrategy = "prints"
            )
    // PossibleUniqueStrategyValues returns an array of possible values for the UniqueStrategy const type.
    func PossibleUniqueStrategyValues() []UniqueStrategy {
        return []UniqueStrategy{Art,Cards,Prints}
    }

    // Card ...
    type Card struct {
    autorest.Response `json:"-"`
    ID *uuid.UUID `json:"id,omitempty"`
    OracleID *uuid.UUID `json:"oracle_id,omitempty"`
    MultiverseIds *[]int32 `json:"multiverse_ids,omitempty"`
    MtgoID *int32 `json:"mtgo_id,omitempty"`
    MtgoFoilID *int32 `json:"mtgo_foil_id,omitempty"`
    URI *string `json:"uri,omitempty"`
    ScryfallURI *string `json:"scryfall_uri,omitempty"`
    PrintsSearchURI *string `json:"prints_search_uri,omitempty"`
    RulingsURI *string `json:"rulings_uri,omitempty"`
    Name *string `json:"name,omitempty"`
    // Layout - Possible values include: 'Normal', 'Split', 'Transform', 'Meld', 'Leveler', 'Saga', 'Planar', 'Scheme', 'Vanguard', 'Token', 'DoubleFacedToken', 'Emblem', 'Augment', 'Host'
    Layout Layouts `json:"layout,omitempty"`
    Cmc *float64 `json:"cmc,omitempty"`
    TypeLine *string `json:"type_line,omitempty"`
    OracleText *string `json:"oracle_text,omitempty"`
    ManaCost *string `json:"mana_cost,omitempty"`
    Power *string `json:"power,omitempty"`
    Toughness *string `json:"toughness,omitempty"`
    Loyalty *string `json:"loyalty,omitempty"`
    LifeModifier *string `json:"life_modifier,omitempty"`
    HandModifier *string `json:"hand_modifier,omitempty"`
    Colors *[]Colors `json:"colors,omitempty"`
    ColorIndicator *[]Colors `json:"color_indicator,omitempty"`
    ColorIdentity *[]Colors `json:"color_identity,omitempty"`
    AllParts *RelatedCards `json:"all_parts,omitempty"`
    CardFaces *[]CardFace `json:"card_faces,omitempty"`
    Legalities *Legality `json:"legalities,omitempty"`
    Reserved *bool `json:"reserved,omitempty"`
    EdhrecRank *int32 `json:"edhrec_rank,omitempty"`
    Set *string `json:"set,omitempty"`
    SetName *string `json:"set_name,omitempty"`
    CollectorNumber *string `json:"collector_number,omitempty"`
    SetSearchURI *string `json:"set_search_uri,omitempty"`
    ScryfallSetURI *string `json:"scryfall_set_uri,omitempty"`
    ImageUris *ImageURI `json:"image_uris,omitempty"`
    HighresImage *bool `json:"highres_image,omitempty"`
    Reprint *bool `json:"reprint,omitempty"`
    Digital *bool `json:"digital,omitempty"`
    // Rarity - Possible values include: 'Common', 'Uncommon', 'Rare', 'Mythic'
    Rarity Rarity `json:"rarity,omitempty"`
    FlavorText *string `json:"flavor_text,omitempty"`
    Artist *string `json:"artist,omitempty"`
    IllustrationID *uuid.UUID `json:"illustration_id,omitempty"`
    Frame *string `json:"frame,omitempty"`
    FullArt *bool `json:"full_art,omitempty"`
    Watermark *string `json:"watermark,omitempty"`
    // BorderColor - Possible values include: 'Black', 'Borderless', 'Gold', 'Silver', 'White'
    BorderColor BorderColors `json:"border_color,omitempty"`
    StorySpotlightNumber *int32 `json:"story_spotlight_number,omitempty"`
    StorySpotlightURI *string `json:"story_spotlight_uri,omitempty"`
    Timeshifted *bool `json:"timeshifted,omitempty"`
    Colorshifted *bool `json:"colorshifted,omitempty"`
    Futureshifted *bool `json:"futureshifted,omitempty"`
    PurchaseUris map[string]*string `json:"purchase_uris"`
    RelatedUris map[string]*string `json:"related_uris"`
    }

        // MarshalJSON is the custom marshaler for Card.
        func (c Card)MarshalJSON() ([]byte, error){
        objectMap := make(map[string]interface{})
                if(c.ID != nil) {
                objectMap["id"] = c.ID
                }
                if(c.OracleID != nil) {
                objectMap["oracle_id"] = c.OracleID
                }
                if(c.MultiverseIds != nil) {
                objectMap["multiverse_ids"] = c.MultiverseIds
                }
                if(c.MtgoID != nil) {
                objectMap["mtgo_id"] = c.MtgoID
                }
                if(c.MtgoFoilID != nil) {
                objectMap["mtgo_foil_id"] = c.MtgoFoilID
                }
                if(c.URI != nil) {
                objectMap["uri"] = c.URI
                }
                if(c.ScryfallURI != nil) {
                objectMap["scryfall_uri"] = c.ScryfallURI
                }
                if(c.PrintsSearchURI != nil) {
                objectMap["prints_search_uri"] = c.PrintsSearchURI
                }
                if(c.RulingsURI != nil) {
                objectMap["rulings_uri"] = c.RulingsURI
                }
                if(c.Name != nil) {
                objectMap["name"] = c.Name
                }
                if(c.Layout != "") {
                objectMap["layout"] = c.Layout
                }
                if(c.Cmc != nil) {
                objectMap["cmc"] = c.Cmc
                }
                if(c.TypeLine != nil) {
                objectMap["type_line"] = c.TypeLine
                }
                if(c.OracleText != nil) {
                objectMap["oracle_text"] = c.OracleText
                }
                if(c.ManaCost != nil) {
                objectMap["mana_cost"] = c.ManaCost
                }
                if(c.Power != nil) {
                objectMap["power"] = c.Power
                }
                if(c.Toughness != nil) {
                objectMap["toughness"] = c.Toughness
                }
                if(c.Loyalty != nil) {
                objectMap["loyalty"] = c.Loyalty
                }
                if(c.LifeModifier != nil) {
                objectMap["life_modifier"] = c.LifeModifier
                }
                if(c.HandModifier != nil) {
                objectMap["hand_modifier"] = c.HandModifier
                }
                if(c.Colors != nil) {
                objectMap["colors"] = c.Colors
                }
                if(c.ColorIndicator != nil) {
                objectMap["color_indicator"] = c.ColorIndicator
                }
                if(c.ColorIdentity != nil) {
                objectMap["color_identity"] = c.ColorIdentity
                }
                if(c.AllParts != nil) {
                objectMap["all_parts"] = c.AllParts
                }
                if(c.CardFaces != nil) {
                objectMap["card_faces"] = c.CardFaces
                }
                if(c.Legalities != nil) {
                objectMap["legalities"] = c.Legalities
                }
                if(c.Reserved != nil) {
                objectMap["reserved"] = c.Reserved
                }
                if(c.EdhrecRank != nil) {
                objectMap["edhrec_rank"] = c.EdhrecRank
                }
                if(c.Set != nil) {
                objectMap["set"] = c.Set
                }
                if(c.SetName != nil) {
                objectMap["set_name"] = c.SetName
                }
                if(c.CollectorNumber != nil) {
                objectMap["collector_number"] = c.CollectorNumber
                }
                if(c.SetSearchURI != nil) {
                objectMap["set_search_uri"] = c.SetSearchURI
                }
                if(c.ScryfallSetURI != nil) {
                objectMap["scryfall_set_uri"] = c.ScryfallSetURI
                }
                if(c.ImageUris != nil) {
                objectMap["image_uris"] = c.ImageUris
                }
                if(c.HighresImage != nil) {
                objectMap["highres_image"] = c.HighresImage
                }
                if(c.Reprint != nil) {
                objectMap["reprint"] = c.Reprint
                }
                if(c.Digital != nil) {
                objectMap["digital"] = c.Digital
                }
                if(c.Rarity != "") {
                objectMap["rarity"] = c.Rarity
                }
                if(c.FlavorText != nil) {
                objectMap["flavor_text"] = c.FlavorText
                }
                if(c.Artist != nil) {
                objectMap["artist"] = c.Artist
                }
                if(c.IllustrationID != nil) {
                objectMap["illustration_id"] = c.IllustrationID
                }
                if(c.Frame != nil) {
                objectMap["frame"] = c.Frame
                }
                if(c.FullArt != nil) {
                objectMap["full_art"] = c.FullArt
                }
                if(c.Watermark != nil) {
                objectMap["watermark"] = c.Watermark
                }
                if(c.BorderColor != "") {
                objectMap["border_color"] = c.BorderColor
                }
                if(c.StorySpotlightNumber != nil) {
                objectMap["story_spotlight_number"] = c.StorySpotlightNumber
                }
                if(c.StorySpotlightURI != nil) {
                objectMap["story_spotlight_uri"] = c.StorySpotlightURI
                }
                if(c.Timeshifted != nil) {
                objectMap["timeshifted"] = c.Timeshifted
                }
                if(c.Colorshifted != nil) {
                objectMap["colorshifted"] = c.Colorshifted
                }
                if(c.Futureshifted != nil) {
                objectMap["futureshifted"] = c.Futureshifted
                }
                if(c.PurchaseUris != nil) {
                objectMap["purchase_uris"] = c.PurchaseUris
                }
                if(c.RelatedUris != nil) {
                objectMap["related_uris"] = c.RelatedUris
                }
                return json.Marshal(objectMap)
        }

    // CardFace ...
    type CardFace struct {
    Name *string `json:"name,omitempty"`
    TypeLine *string `json:"type_line,omitempty"`
    OracleText *string `json:"oracle_text,omitempty"`
    ManaCost *string `json:"mana_cost,omitempty"`
    // Colors - Possible values include: 'W', 'U', 'B', 'R', 'G'
    Colors Colors `json:"colors,omitempty"`
    // ColorIndicator - Possible values include: 'W', 'U', 'B', 'R', 'G'
    ColorIndicator Colors `json:"color_indicator,omitempty"`
    Power *string `json:"power,omitempty"`
    Toughness *string `json:"toughness,omitempty"`
    Loyalty *string `json:"loyalty,omitempty"`
    FlavorText *string `json:"flavor_text,omitempty"`
    IllustrationID *uuid.UUID `json:"illustration_id,omitempty"`
    ImageUris *ImageURI `json:"image_uris,omitempty"`
    }

    // CardList ...
    type CardList struct {
    autorest.Response `json:"-"`
    TotalCards *int32 `json:"total_cards,omitempty"`
    HasMore *bool `json:"has_more,omitempty"`
    NextPage *string `json:"next_page,omitempty"`
    Data *[]Card `json:"data,omitempty"`
    }

    // CardSymbol ...
    type CardSymbol struct {
    Symbol *string `json:"symbol,omitempty"`
    LooseVariant *string `json:"loose_variant,omitempty"`
    English *string `json:"english,omitempty"`
    Transposable *bool `json:"transposable,omitempty"`
    RepresentsMana *bool `json:"represents_mana,omitempty"`
    Cmc *float64 `json:"cmc,omitempty"`
    AppearsInManaCosts *bool `json:"appears_in_mana_costs,omitempty"`
    Funny *bool `json:"funny,omitempty"`
    // Colors - Possible values include: 'W', 'U', 'B', 'R', 'G'
    Colors Colors `json:"colors,omitempty"`
    }

    // CardSymbolList ...
    type CardSymbolList struct {
    autorest.Response `json:"-"`
    Data *[]CardSymbol `json:"data,omitempty"`
    }

    // Catalog ...
    type Catalog struct {
    autorest.Response `json:"-"`
    TotalItems *int32 `json:"total_items,omitempty"`
    Data *[]string `json:"data,omitempty"`
    }

    // Error ...
    type Error struct {
    Status *int32 `json:"status,omitempty"`
    Code *string `json:"code,omitempty"`
    Details *string `json:"details,omitempty"`
    Type *string `json:"type,omitempty"`
    Warnings *[]string `json:"warnings,omitempty"`
    }

    // ImageURI ...
    type ImageURI struct {
    Small *string `json:"small,omitempty"`
    Normal *string `json:"normal,omitempty"`
    Large *string `json:"large,omitempty"`
    Png *string `json:"png,omitempty"`
    ArtCrop *string `json:"art_crop,omitempty"`
    BorderCrop *string `json:"border_crop,omitempty"`
    }

    // Legality ...
    type Legality struct {
    // Standard - Possible values include: 'Legal', 'NotLegal'
    Standard LegalStatus `json:"standard,omitempty"`
    // Future - Possible values include: 'Legal', 'NotLegal'
    Future LegalStatus `json:"future,omitempty"`
    // Frontier - Possible values include: 'Legal', 'NotLegal'
    Frontier LegalStatus `json:"frontier,omitempty"`
    // Modern - Possible values include: 'Legal', 'NotLegal'
    Modern LegalStatus `json:"modern,omitempty"`
    // Legacy - Possible values include: 'Legal', 'NotLegal'
    Legacy LegalStatus `json:"legacy,omitempty"`
    // Pauper - Possible values include: 'Legal', 'NotLegal'
    Pauper LegalStatus `json:"pauper,omitempty"`
    // Vintage - Possible values include: 'Legal', 'NotLegal'
    Vintage LegalStatus `json:"vintage,omitempty"`
    // Penny - Possible values include: 'Legal', 'NotLegal'
    Penny LegalStatus `json:"penny,omitempty"`
    // Commander - Possible values include: 'Legal', 'NotLegal'
    Commander LegalStatus `json:"commander,omitempty"`
    // OnevOne - Possible values include: 'Legal', 'NotLegal'
    OnevOne LegalStatus `json:"1v1,omitempty"`
    // Duel - Possible values include: 'Legal', 'NotLegal'
    Duel LegalStatus `json:"duel,omitempty"`
    // Brawl - Possible values include: 'Legal', 'NotLegal'
    Brawl LegalStatus `json:"brawl,omitempty"`
    }

    // ManaCost ...
    type ManaCost struct {
    autorest.Response `json:"-"`
    Cost *string `json:"cost,omitempty"`
    Cmc *float64 `json:"cmc,omitempty"`
    // Colors - Possible values include: 'W', 'U', 'B', 'R', 'G'
    Colors Colors `json:"colors,omitempty"`
    Colorless *bool `json:"colorless,omitempty"`
    Monocolored *bool `json:"monocolored,omitempty"`
    Multicolored *bool `json:"multicolored,omitempty"`
    }

    // RelatedCards ...
    type RelatedCards struct {
    ID *uuid.UUID `json:"id,omitempty"`
    Name *string `json:"name,omitempty"`
    URI *string `json:"uri,omitempty"`
    }

    // Ruling ...
    type Ruling struct {
    Source *string `json:"source,omitempty"`
    PublishedAt *date.Date `json:"published_at,omitempty"`
    Comment *string `json:"comment,omitempty"`
    }

    // RulingList ...
    type RulingList struct {
    autorest.Response `json:"-"`
    Data *[]Ruling `json:"data,omitempty"`
    }

    // Set ...
    type Set struct {
    autorest.Response `json:"-"`
    Code *string `json:"code,omitempty"`
    MtgoCode *string `json:"mtgo_code,omitempty"`
    Name *string `json:"name,omitempty"`
    // SetType - Possible values include: 'SetTypesCore', 'SetTypesExpansion', 'SetTypesMasters', 'SetTypesMasterpiece', 'SetTypesFromTheVault', 'SetTypesSpellbook', 'SetTypesPremiumDeck', 'SetTypesDuelDeck', 'SetTypesCommander', 'SetTypesPlanechase', 'SetTypesConspiracy', 'SetTypesArchenemy', 'SetTypesVanguard', 'SetTypesFunny', 'SetTypesStarter', 'SetTypesBox', 'SetTypesPromo', 'SetTypesToken', 'SetTypesMemorabilia', 'SetTypesTreasureChest'
    SetType SetTypes `json:"set_type,omitempty"`
    ReleasedAt *date.Date `json:"released_at,omitempty"`
    BlockCode *string `json:"block_code,omitempty"`
    Block *string `json:"block,omitempty"`
    ParentSetCode *string `json:"parent_set_code,omitempty"`
    CardCount *int32 `json:"card_count,omitempty"`
    Digital *bool `json:"digital,omitempty"`
    Foil *bool `json:"foil,omitempty"`
    IconSvgURI *string `json:"icon_svg_uri,omitempty"`
    SearchURI *string `json:"search_uri,omitempty"`
    }

    // SetList ...
    type SetList struct {
    autorest.Response `json:"-"`
    Data *[]Set `json:"data,omitempty"`
    }
