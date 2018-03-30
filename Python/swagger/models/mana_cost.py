# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class ManaCost(Model):
    """ManaCost.

    :param cost:
    :type cost: str
    :param cmc:
    :type cmc: float
    :param colors: Possible values include: 'W', 'U', 'B', 'R', 'G'
    :type colors: str or ~swagger.models.Colors
    :param colorless:
    :type colorless: bool
    :param monocolored:
    :type monocolored: bool
    :param multicolored:
    :type multicolored: bool
    """

    _attribute_map = {
        'cost': {'key': 'cost', 'type': 'str'},
        'cmc': {'key': 'cmc', 'type': 'float'},
        'colors': {'key': 'colors', 'type': 'Colors'},
        'colorless': {'key': 'colorless', 'type': 'bool'},
        'monocolored': {'key': 'monocolored', 'type': 'bool'},
        'multicolored': {'key': 'multicolored', 'type': 'bool'},
    }

    def __init__(self, cost=None, cmc=None, colors=None, colorless=None, monocolored=None, multicolored=None):
        super(ManaCost, self).__init__()
        self.cost = cost
        self.cmc = cmc
        self.colors = colors
        self.colorless = colorless
        self.monocolored = monocolored
        self.multicolored = multicolored