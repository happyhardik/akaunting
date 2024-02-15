<?php

namespace App\Traits;

use App\Traits\Modules;

trait Cloud
{
    use Modules;

    //Currently, we are using on premise version, not the cloud version as it is not ready
    public $cloud_host = 'cloud.nuaxa.co';

    public function isCloud()
    {
        return request()->getHost() == $this->cloud_host;
    }

    public function getCloudRolesPageUrl($location = 'user')
    {
        if (! $this->isCloud()) {
            return 'https://app.nuaxa.co/apps/roles?utm_source=software&utm_medium=' . $location . '&utm_campaign=roles';
        }

        if ($this->moduleIsEnabled('roles')) {
            return route('roles.roles.index');
        }

        return route('cloud.plans.index', [
            'utm_source'    => $location,
            'utm_medium'    => 'app',
            'utm_campaign'  => 'roles',
        ]);
    }

    public function getCloudBankFeedsUrl($location = 'widget')
    {
        if (! $this->isCloud()) {
            return 'https://app.nuaxa.co/apps/bank-feeds?utm_source=software&utm_medium=' . $location . '&utm_campaign=bank_feeds';
        }

        return route('cloud.plans.index', [
            'utm_source'    => $location,
            'utm_medium'    => 'app',
            'utm_campaign'  => 'bank_feeds',
        ]);
    }
}
