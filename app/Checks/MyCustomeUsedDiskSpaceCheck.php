<?php

namespace App\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class MyCustomeUsedDiskSpaceCheck extends Check
{
    public function run(): Result
    {
        $usedDiskSpacePercentage = $this->getDiskUsagePercentage();

        $result = Result::make();

        if ($usedDiskSpacePercentage > 90) {
            return $result->failed("The disk is almost full ({$usedDiskSpacePercentage} % used)");
        }

        if ($usedDiskSpacePercentage > 70) {
            return $result->warning("The disk getting full ({$usedDiskSpacePercentage}% used)");
        }

        return $result->ok();
    }

    protected function getDiskUsagePercentage(): int
    {
        // Determine used disk space, omitted for brevity
        // Example implementation:
        $diskTotalSpace = disk_total_space('/');
        $diskFreeSpace = disk_free_space('/');
        $diskUsedSpace = $diskTotalSpace - $diskFreeSpace;

        return (int)(($diskUsedSpace / $diskTotalSpace) * 100);
    }
}