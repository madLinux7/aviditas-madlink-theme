# Aviditas for madlink

Required core theme for madlink. Independently versioned; first release **0.1.0**.

Canonical repository: https://github.com/madLinux7/aviditas-madlink-theme

Install the release package in `[madlink]/themes/aviditas/`. The madlink startup bootstrap installs a missing theme automatically; it never replaces an existing theme. This required theme cannot be uninstalled. Page assignments and saved design configuration belong to madlink and are not part of the package.

The manifest records supported madlink versions. A GitHub release alone does not grant Verified: verification requires the exact approved catalog version and unchanged files. See https://github.com/madLinux7/madlink-themes for review rules.

## Releases

This repository contains theme sources and license/documentation files only. Packaging and review tools belong to the catalog operator in madLinux7/madlink-themes. Theme authors submit a catalog PR with their GitHub repository URL; a human maintainer reviews the exact source revision and package. No Python tools or GitHub workflows belong in this theme repository.

The maintainer prepares deterministic release archives and checksums centrally, then publishes the approved package bytes to this theme repository’s release. A tag push alone does not publish a package. Never reuse a published version with different bytes; the manifest version and release tag must match.

## License

AGPL-3.0-or-later, including inherited madlink source. See LICENSE and NOTICE. Fonts are core-provided and retain their separate license notices in madlink.
