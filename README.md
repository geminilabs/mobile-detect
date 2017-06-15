# Statamic v2 Mobile Detect Addon

![Statamic 2.0.0-public-beta.2](http://b.repl.ca/v1/Statamic-2.0.0_public_beta_2-green.png) + ![Mobile Detect 2.8.19](http://b.repl.ca/v1/Mobile_Detect-2.8.19-green.png)

This plugin could not exist without the amazing work of the [Mobile Detect project](https://github.com/serbanghita/Mobile-Detect) ![Mobile Detect 2.8.19](http://b.repl.ca/v1/Mobile_Detect-2.8.19-green.png)

## Usage

### Core Tag

```bash
{{ mobile_detect }}
```

### Example Output for `{{ mobile_detect }}`

+ `computer`
+ `tablet`
+ `phone`

### Get `Mobile Detect` library version number

```bash
{{ mobile_detect:library_version }}
```

### Example Output for `{{ mobile_detect:library_version }}`

```bash
2.8.19
```

## Using as part of logic

Using `{{ mobile_detect }}` as part of an `{{ if }}` statement:

```bash
{{if something == { mobile_detect } }}
    ...
    {# some content #}
    ...
{{ endif }}
```
