<?php
/**
 * Humbug
 *
 * @category   Humbug
 * @package    Humbug
 * @copyright  Copyright (c) 2015 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    https://github.com/padraic/phar-updater/blob/master/LICENSE New BSD License
 *
 * This class is partially patterned after Composer's self-update.
 */

namespace Humbug\SelfUpdate\Strategy;

use Humbug\SelfUpdate\Updater;

abstract class AbstractStrategy
{

    /**
     * Download the remote Phar file.
     *
     * @param Updated $updater
     * @return void
     */
    abstract public function download(Updater $updater);

    /**
     * Retrieve the current version available remotely.
     *
     * @param Updated $updater
     * @return void
     */
    abstract public function getCurrentRemoteVersion(Updater $updater);

    /**
     * Retrieve the current version of the local phar file.
     *
     * @param Updated $updater
     * @return void
     */
    abstract public function getCurrentLocalVersion(Updater $updater);
}