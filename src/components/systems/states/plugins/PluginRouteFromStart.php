<?php
namespace tratabor\components\systems\states\plugins;

use tratabor\components\systems\Plugin;
use tratabor\interfaces\systems\states\IStatesRoute;
use tratabor\interfaces\systems\states\plugins\IPluginRouteFrom;

/**
 * Class PluginRouteFromStart
 *
 * @package tratabor\components\systems\states\plugins
 * @author Funcraft <me@funcraft.ru>
 */
class PluginRouteFromStart extends Plugin implements IPluginRouteFrom
{
    /**
     * @param IStatesRoute $route
     * @param $fromStateId
     *
     * @return string
     */
    public function __invoke(IStatesRoute &$route, $fromStateId)
    {
        return $fromStateId ?: '@directive.machineInitialization()';
    }
}
