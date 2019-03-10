# Pico Version Plugin

This plugin addes as [Twig](https://twig.symfony.com) filter that allow you to include the version number of Pico.

## Usage

In you template you can use `{{ 'Twig'|PicoVersion }}` and it will add your _Pico::VERSION_.

So:
`<meta name="generator" content="Pico {{ 'Twig'|PicoVersion }}">`

Will be rendered to:
`<meta name="generator" content="Pico 2.0.5">

## Installation

### With git

1. Go to your Pico Plugins folder
2. `git clone https://github.com/hermannmarkus/Pico-VersionPlugin.git VersionPlugin`
3. Add the following lines to your config.yaml:
- `VersionPlugin.enabled: true`

### Without git

1. Download [the master branch](https://github.com/hermannmarkus/Pico-VersionPlugin/archive/master.zip) as a zip file.
2. Add the contents of the zip file to your Pico plugins folder and rename the folder to `VersionPlugin`.
3. Add the following lines to your config.yaml:
- `VersionPlugin.enabled: true`
