<?php

declare(strict_types=1);

/**
 * A Plugin that registers listeners with the Emitter.
 *
 * @license See LICENSE in source root
 */

namespace Cspray\Labrador\Plugin;

use League\Event\EmitterInterface;

interface EventAwarePlugin extends Plugin {

    /**
     * Register the event listeners your Plugin responds to.
     *
     * @param EmitterInterface $emitter
     * @return void
     */
    public function registerEventListeners(EmitterInterface $emitter);

}
