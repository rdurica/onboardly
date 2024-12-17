<?php

declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * Kernel.
 *
 * @copyright Copyright (c) 2024, Robert Durica
 * @since     2024-12-16
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
