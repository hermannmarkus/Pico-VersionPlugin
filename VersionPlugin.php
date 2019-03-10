<?php
/**
 * This file is part of Pico. It's copyrighted by the contributors recorded
 * in the version control history of the file, available from the following
 * original location:
 *
 * <https://github.com/hermannmarkus/Pico-VersionPlugin/blob/master/VersionPlugin.php>
 *
 * SPDX-License-Identifier: MIT
 * License-Filename: LICENSE
 */

/**
 * Pico Version Plugin
 *
 * The plugin provides a twig filter to include the Pico Version into a template.
 * Used for the <meta name="generator" content="Pico"> tag.
 *
 * @author  Markus Hermann
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */
class VersionPlugin extends AbstractPicoPlugin
{
    /**
     * API version used by this plugin
     *
     * @var int
     */
    const API_VERSION = 2;

    /**
     * Triggered when Pico registers the twig template engine
     *
     * @see Pico::getTwig()
     *
     * @param Twig_Environment &$twig Twig instance
     *
     * @return void
     */
    public function onTwigRegistered(Twig_Environment &$twig)
    {
        $versionFilter = new \Twig\TwigFilter('PicoVersion', function ($string) {
            return $this->getPico()::VERSION;
        });

        $twig->addFilter($versionFilter);
    }
}