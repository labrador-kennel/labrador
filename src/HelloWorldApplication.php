<?php declare(strict_types=1);

namespace Cspray\Labrador;

use Amp\Deferred;
use Amp\Loop;
use Amp\Promise;
use Auryn\Injector;
use Cspray\Labrador\AsyncEvent\Emitter;

class HelloWorldApplication implements Application {

    public function execute(): Promise {
        $deferred = new Deferred();

        Loop::defer(function() use($deferred) {
            echo 'Hello world!';
            $deferred->resolve();
        });

        return $deferred->promise();
    }

    /**
     * Perform any actions that should be completed by your Plugin before the
     * primary execution of your app is kicked off.
     */
    public function boot() : void {
        // noop
    }

    /**
     * Register the event listeners your Plugin responds to.
     *
     * @param Emitter $emitter
     * @return void
     */
    public function registerEventListeners(Emitter $emitter) : void {
        // noop
    }

    /**
     * Return an array of plugin names that this plugin depends on.
     *
     * @return array
     */
    public function dependsOn(): iterable {
        return [];
    }

    /**
     * Register any services that the Plugin provides.
     *
     * @param Injector $injector
     * @return void
     */
    public function registerServices(Injector $injector) {
        // noop
    }
}