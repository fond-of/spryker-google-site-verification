<?php

namespace FondOfSpryker\Yves\GoogleSiteVerification;

use FondOfSpryker\Shared\GoogleSiteVerification\GoogleSiteVerificationConstants;
use Spryker\Yves\Kernel\AbstractBundleConfig;

class GoogleSiteVerificationConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getGoogleSiteVerificationKey(): string
    {
        return $this->get(GoogleSiteVerificationConstants::GOOGLE_SITE_VERIFICATION_KEY, '');
    }
}
