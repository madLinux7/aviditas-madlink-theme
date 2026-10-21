# Aviditas for madlink

Required core theme for madlink. Independently versioned; first release **0.1.0**.

Canonical repository: https://github.com/madLinux7/aviditas-madlink-theme

Install the release package in `[madlink]/themes/aviditas/`. The madlink startup bootstrap installs a missing theme automatically; it never replaces an existing theme. This required theme cannot be uninstalled. Page assignments and saved design configuration belong to madlink and are not part of the package.

The manifest records supported madlink versions. A GitHub release alone does not grant Verified: verification requires the exact approved catalog version and unchanged files. See https://github.com/madLinux7/madlink-themes for review rules.

## Releases

Commit and review changes, set `theme.json` version, then tag `v<version>`. `python3 tools/package.py --tag v0.1.0 --output dist` creates deterministic USTAR/gzip packages, SHA-256 and full file inventories. Tooling and Git metadata are excluded. Never reuse a published version with different bytes. GitHub immutable releases and protected tags must be enabled by the maintainer.

## License

AGPL-3.0-or-later, including inherited madlink source. See LICENSE and NOTICE. Fonts are core-provided and retain their separate license notices in madlink.
