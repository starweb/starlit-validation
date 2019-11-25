# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.2] - 2019-11-25
### Fixed
- bug in several places where we did not pass a string to mb_strlen() 

## [1.0.1] - 2019-04-12
### Fixed
- bug where a non string was passed to mb_strlen()

## [1.0.0] - 2019-03-15
### Added
- CHANGELOG.md
- strict type declarations to all classes (including tests)
- type hinting for method parameters and return types

### Changed
- added php 7.3 to travis config

## [0.2.0] - 2018-09-17
### Added
- a new 'nullable' validation option which allows null values as validated data

### Changed
- Updated dependencies to PHP >=7.1 and Symfony ^4.0

## [0.1.0] - 2017-02-16
### Added
- Initial release.
 
