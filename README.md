OpenTBSBundle for ZF2
=========================

This bundle is just a convenient way to use OpenTBS, all the credits go to https://github.com/mbence, Skrol29 and the TinyButStrong team. http://www.tinybutstrong.com/

OpenTBS - create OpenOffice and Ms Office documents with PHP (and ZF2)


## Introduction

(Taken from http://www.tinybutstrong.com/plugins/opentbs/tbs_plugin_opentbs.html)

OpenTBS is a PHP tool to produce any OpenOffice and Ms Office documents with templates.

OpenTBS can merge any OpenDocument and Open XML files. It autommatically reconize extensions: odt, ods, odg, odf, odm, odp, ott, ots, otg, otp, docx, xlsx, pptx.
In fact it can merge any XML or Text file saved in a zip container (which is the case for both OpenDocuments and OpenXML documents).

What is special to OpenTBS:
* Design your templates directly with OpenOffice or MS Office.
* No exe file needed to merge documents.
* No temporary files needed to merge documents.
* Output directly as an http download, a new file on the disk, or as a string (for file attachment for example).
* Works with both PHP 4 and PHP 5.

## Versions included
TinyButStrong - 3.9.0

OpenTBS - 1.9.4

## Requirements

* ZF2
* It is better to have the [Zlib](http://www.php.net/manual/en/book.zlib.php) extension enabled on your PHP installation. If it's not, [here is what to do](http://www.tinybutstrong.com/plugins/opentbs/tbs_plugin_opentbs.html#zlib).

## Installation

### Step 1: Download the bundle using composer

Add the following in your composer.json:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/kipperlenny/opentbsbundle"
        }
    ],
    "require": {
        "hamichen/opentbs-bundle": "dev-master"
    }
}
```

Then download / update by running the command:

``` bash
$ php composer.phar update hamichen/opentbs-bundle
```

Composer will install the bundle to your project's `vendor/Kipperlenny/opentbs-bundle` directory.

### Step 2: Add the bundle in your application.config.php

```php
'OpentbsBundle',
```

#### Now you can use the 'opentbs' service.


## Using OpenTBSBundle

First you need to define the variables in your docx template (you can use any other supported document format).
```
... some text in a word file with a `[client.name]` variable ...

```
In TBS you always need a variable base `client` and a variable name `name`.

Then in your controller you need to get the OpenTBS service, load your template and merge the fields (eg. replace the teplate variables).
```php
...
use OpentbsBundle\Factory\TBSFactory as TBS;
...

    $tbs = new TBS();
    $tbs->LoadTemplate('document.odt');
```
A note for onshow automatic variables:
You could define your variables within the `onshow` base, (like `onshow.name`), but I would not recommend this practice for it will only work if you use GLOBAL variables.


### For more information ...
read the TBS manual at http://www.tinybutstrong.com/manual.php

and the OpenTBS plugin documentation at http://www.tinybutstrong.com/plugins/opentbs/tbs_plugin_opentbs.html
