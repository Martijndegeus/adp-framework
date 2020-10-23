<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'martijndeg/adp-framework';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a',
  'mongodb/mongodb' => '1.7.1@b35af66631a11ee730ff1fde295f71e89f01f121',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'symfony/polyfill-ctype' => 'v1.19.0@aed596913b70fae57be53d86faa2e9ef85a2297b',
  'symfony/polyfill-mbstring' => 'v1.19.0@b5f7b932ee6fa802fc792eabd77c4c88084517ce',
  'symfony/polyfill-php80' => 'v1.19.0@f54ef00f4678f348f133097fa8c3701d197ff44d',
  'vlucas/phpdotenv' => 'v5.2.0@fba64139db67123c7a57072e5f8d3db10d160b66',
  'martijndeg/adp-framework' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
