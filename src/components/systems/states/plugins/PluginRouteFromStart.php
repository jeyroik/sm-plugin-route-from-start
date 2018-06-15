<?php
namespace jeyroik\extas\components\systems\states\plugins;

use jeyroik\extas\components\systems\Plugin;
use jeyroik\extas\interfaces\systems\states\IStatesRoute;
use jeyroik\extas\interfaces\systems\states\plugins\IPluginRouteFrom;

/**
 * Class PluginRouteFromStart
 *
 * @package jeyroik\extas\components\systems\states\plugins
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
