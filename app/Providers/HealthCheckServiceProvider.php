<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use App\Checks\MyCustomeUsedDiskSpaceCheck;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;

class HealthCheckServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Health::checks([
            UsedDiskSpaceCheck::new()
            ->warnWhenUsedSpaceIsAbovePercentage(60)
            ->failWhenUsedSpaceIsAbovePercentage(80),
            DatabaseCheck::new(),
            MyCustomeUsedDiskSpaceCheck::new(),
            EnvironmentCheck::new(),
            DebugModeCheck::new(),
            SecurityAdvisoriesCheck::new(),
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
