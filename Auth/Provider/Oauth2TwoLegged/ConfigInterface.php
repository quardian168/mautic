<?php

declare(strict_types=1);

/*
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\IntegrationsBundle\Auth\Provider\Oauth2TwoLegged;

use MauticPlugin\IntegrationsBundle\Auth\Provider\AuthConfigInterface;
use MauticPlugin\IntegrationsBundle\Auth\Support\Oauth2\ConfigAccess\CredentialsSignerInterface;
use MauticPlugin\IntegrationsBundle\Auth\Provider\Oauth2ThreeLegged\TokenPersistenceInterface;
use MauticPlugin\IntegrationsBundle\Auth\Provider\Oauth2ThreeLegged\TokenSignerInterface;

interface ConfigInterface extends AuthConfigInterface
{
    /**
     * @return CredentialsSignerInterface
     */
    public function getClientCredentialsSigner(): CredentialsSignerInterface;

    /**
     * @return TokenSignerInterface
     */
    public function getAccessTokenSigner(): TokenSignerInterface;

    /**
     * @return TokenPersistenceInterface
     */
    public function getAccessTokenPersistence(): TokenPersistenceInterface;
}