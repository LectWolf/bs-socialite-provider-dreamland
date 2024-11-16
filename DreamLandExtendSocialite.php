<?php

namespace LectWolf\BsSocialiteProviderDreamLand;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DreamLandExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('dreamland', __NAMESPACE__.'\Provider');
    }
}