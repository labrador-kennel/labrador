<?php

declare(strict_types=1);

/**
 * An event emitter that will halt listeners for a given event if
 * propagation is stopped.
 *
 * @license See LICENSE in source root
 */

namespace Labrador\Event;

use Evenement\{EventEmitterInterface, EventEmitterTrait};

class HaltableEventEmitter implements EventEmitterInterface {

    use EventEmitterTrait;

    public function emit($event, array $arguments = []) {
        if (count($arguments) > 0 && $arguments[0] instanceof Event) {
            $eventObj = $arguments[0];
        }

        foreach ($this->listeners($event) as $cb) {
            if (isset($eventObj) && $eventObj->isPropagationStopped()) {
                break;
            }
            $cb(...$arguments);
        }
    }
}
