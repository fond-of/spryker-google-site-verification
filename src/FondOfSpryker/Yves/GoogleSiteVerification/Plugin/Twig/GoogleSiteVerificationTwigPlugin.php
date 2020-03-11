<?php

namespace FondOfSpryker\Yves\GoogleSiteVerification\Plugin\Twig;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\TwigExtension\Dependency\Plugin\TwigPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;
use Twig\Environment;

/**
 * Class GoogleSiteVerificationTwigPlugin
 * @package FondOfSpryker\Yves\GoogleSiteVerification\Plugin\Twig
 * @method \FondOfSpryker\Yves\GoogleSiteVerification\GoogleSiteVerificationConfig getConfig()
 */
class GoogleSiteVerificationTwigPlugin extends AbstractPlugin implements TwigPluginInterface
{
    /**
     * @param  \Twig\Environment  $twig
     * @param  \Spryker\Service\Container\ContainerInterface  $container
     *
     * @return \Twig\Environment
     */
    public function extend(Environment $twig, ContainerInterface $container): Environment
    {
        $twig->addGlobal('google_site_verification_key', $this->getConfig()->getGoogleSiteVerificationKey());
        return $twig;
    }
}
