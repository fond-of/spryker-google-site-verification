# Google Site Verification Module
[![Build Status](https://travis-ci.org/fond-of/spryker-google-site-verification.svg?branch=master)](https://travis-ci.org/fond-of/spryker-google-site-verification)
[![PHP from Travis config](https://img.shields.io/travis/php-v/symfony/symfony.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/google-site-verification)

## Description

Add the google site verification key as a template variable (google_site_verification_key) to twig.

## Installation

```
composer require fond-of-spryker/google-site-verification
```

Register GoogleSiteVerificationTwigPlugin to TwigDependencyProvider

```
protected function getTwigPlugins(): array
    {
        return [
            ...
            new GoogleSiteVerificationTwigPlugin(),
        ];
    }
```

## Usage
Use it in template
```
{% if google_site_verification_key != ''%}<meta name="google-site-verification" content="{{ google_site_verification_key }}" />{% endif %}
```

## ToDo
Since it was extracted from the old ShopApplicationServiceProvider addGlobalTemplateVariables. Move it to a widget instead of passing the key as a global variable
