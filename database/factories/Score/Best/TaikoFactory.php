<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace Database\Factories\Score\Best;

use App\Models\Score\Best\Taiko;

class TaikoFactory extends ModelFactory
{
    protected $model = Taiko::class;

    // TODO: remove following line after removing legacy-factories
    // fooling legacy-factories' "isLegacyFactory" check: class Hello extends Factory
}
