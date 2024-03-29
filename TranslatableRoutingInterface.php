<?php

/*
 * This file is part of the Klipper package.
 *
 * (c) François Pluchino <francois.pluchino@klipper.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Klipper\Component\Routing;

/**
 * Translatable routing interface.
 *
 * @author François Pluchino <francois.pluchino@klipper.dev>
 */
interface TranslatableRoutingInterface extends RoutingInterface
{
    /**
     * Get the path with language query parameter.
     *
     * @param string $name       The route name for organization
     * @param array  $parameters The parameters of routes
     * @param bool   $relative   Check if path must be relative or not
     */
    public function getLangPath(string $name, array $parameters = [], bool $relative = false): string;

    /**
     * Get the url with language query parameter.
     *
     * @param string $name           The route name for organization
     * @param array  $parameters     The parameters of routes
     * @param bool   $schemeRelative Check if the scheme must be relative or not
     */
    public function getLangUrl(string $name, array $parameters = [], bool $schemeRelative = false): string;
}
