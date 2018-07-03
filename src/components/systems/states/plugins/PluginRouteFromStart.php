<?php
namespace jeyroik\extas\components\systems\states\plugins;

use jeyroik\extas\components\systems\Plugin;

use jeyroik\extas\interfaces\systems\states\extensions\IStatesRoute;
use jeyroik\extas\interfaces\systems\states\plugins\IPluginRouteFrom;

/**
 * Class PluginRouteFromStart
 *
 * @package jeyroik\extas\components\systems\states\plugins
 * @author Funcraft <me@funcraft.ru>
 */
class PluginRouteFromStart extends Plugin implements IPluginRouteFrom
{
    public $preDefinedStage = IStatesRoute::STAGE__FROM;

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
