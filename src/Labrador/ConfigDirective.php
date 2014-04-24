<?php

/**
 * 
 * @license See LICENSE in source root
 * @version 1.0
 * @since   1.0
 */

namespace Labrador;

abstract class ConfigDirective {

    const ENVIRONMENT = 'labrador.environment';
    const CONFIG_DIR = 'labrador.config_dir';
    const ROOT_DIR = 'labrador.root_dir';

    const BOOTSTRAPS_CALLBACK = 'labrador.bootstraps_callback';
    const ROUTES_CALLBACK = 'labrador.routes_callback';
    const SERVICE_REGISTERS_CALLBACK = 'labrador.service_registers_callback';

} 
