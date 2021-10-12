<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$MnNURERQNnVJTXRKckVQbg$Z0Z5tx6paohzSn57fNDTlO3wzkN54H3e+L8bDXGhRnY',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'dlf' => 'a:49:{s:15:"metadataFormats";s:1:"0";s:9:"useragent";s:19:"Kitodo.Presentation";s:16:"forceAbsoluteUrl";s:1:"0";s:21:"forceAbsoluteUrlHttps";s:1:"0";s:7:"caching";s:1:"0";s:21:"publishNewCollections";s:1:"1";s:13:"unhideOnIndex";s:1:"0";s:13:"fileGrpImages";s:11:"DEFAULT,MAX";s:13:"fileGrpThumbs";s:6:"THUMBS";s:15:"fileGrpDownload";s:8:"DOWNLOAD";s:15:"fileGrpFulltext";s:8:"FULLTEXT";s:12:"fileGrpAudio";s:5:"AUDIO";s:16:"indexAnnotations";s:1:"0";s:18:"iiifThumbnailWidth";s:3:"150";s:19:"iiifThumbnailHeight";s:3:"150";s:11:"solrConnect";s:1:"0";s:9:"solrHttps";s:1:"0";s:8:"solrHost";s:4:"solr";s:8:"solrPort";s:4:"8983";s:8:"solrPath";s:1:"/";s:8:"solrUser";s:0:"";s:8:"solrPass";s:0:"";s:11:"solrTimeout";s:2:"10";s:19:"solrAllowCoreDelete";s:1:"0";s:11:"solrFieldId";s:2:"id";s:12:"solrFieldUid";s:3:"uid";s:12:"solrFieldPid";s:3:"pid";s:13:"solrFieldPage";s:4:"page";s:15:"solrFieldPartof";s:6:"partof";s:13:"solrFieldRoot";s:4:"root";s:12:"solrFieldSid";s:3:"sid";s:17:"solrFieldToplevel";s:8:"toplevel";s:13:"solrFieldType";s:4:"type";s:14:"solrFieldTitle";s:5:"title";s:15:"solrFieldVolume";s:6:"volume";s:18:"solrFieldThumbnail";s:9:"thumbnail";s:16:"solrFieldDefault";s:7:"default";s:18:"solrFieldTimestamp";s:9:"timestamp";s:21:"solrFieldAutocomplete";s:12:"autocomplete";s:17:"solrFieldFulltext";s:8:"fulltext";s:17:"solrFieldRecordId";s:9:"record_id";s:13:"solrFieldPurl";s:4:"purl";s:12:"solrFieldUrn";s:3:"urn";s:17:"solrFieldLocation";s:8:"location";s:19:"solrFieldCollection";s:10:"collection";s:16:"solrFieldLicense";s:7:"license";s:14:"solrFieldTerms";s:5:"terms";s:21:"solrFieldRestrictions";s:12:"restrictions";s:13:"solrFieldGeom";s:4:"geom";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'dlf' => [
            'caching' => '0',
            'fileGrpAudio' => 'AUDIO',
            'fileGrpDownload' => 'DOWNLOAD',
            'fileGrpFulltext' => 'FULLTEXT',
            'fileGrpImages' => 'DEFAULT,MAX',
            'fileGrpThumbs' => 'THUMBS',
            'forceAbsoluteUrl' => '0',
            'forceAbsoluteUrlHttps' => '0',
            'iiifThumbnailHeight' => '150',
            'iiifThumbnailWidth' => '150',
            'indexAnnotations' => '0',
            'metadataFormats' => '0',
            'publishNewCollections' => '1',
            'solrAllowCoreDelete' => '0',
            'solrConnect' => '0',
            'solrFieldAutocomplete' => 'autocomplete',
            'solrFieldCollection' => 'collection',
            'solrFieldDefault' => 'default',
            'solrFieldFulltext' => 'fulltext',
            'solrFieldGeom' => 'geom',
            'solrFieldId' => 'id',
            'solrFieldLicense' => 'license',
            'solrFieldLocation' => 'location',
            'solrFieldPage' => 'page',
            'solrFieldPartof' => 'partof',
            'solrFieldPid' => 'pid',
            'solrFieldPurl' => 'purl',
            'solrFieldRecordId' => 'record_id',
            'solrFieldRestrictions' => 'restrictions',
            'solrFieldRoot' => 'root',
            'solrFieldSid' => 'sid',
            'solrFieldTerms' => 'terms',
            'solrFieldThumbnail' => 'thumbnail',
            'solrFieldTimestamp' => 'timestamp',
            'solrFieldTitle' => 'title',
            'solrFieldToplevel' => 'toplevel',
            'solrFieldType' => 'type',
            'solrFieldUid' => 'uid',
            'solrFieldUrn' => 'urn',
            'solrFieldVolume' => 'volume',
            'solrHost' => 'solr',
            'solrHttps' => '0',
            'solrPass' => '',
            'solrPath' => '/',
            'solrPort' => '8983',
            'solrTimeout' => '10',
            'solrUser' => '',
            'unhideOnIndex' => '0',
            'useragent' => 'Kitodo.Presentation',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'pageNotFoundOnCHashError' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '797def1f10a0c7f90b82d5bb6a22cac55fffa4badce8e3ce7a58c14ae4ce624051fe048688cc58f9b7f044d1d84cbbeb',
        'exceptionalErrors' => 12290,
        'features' => [
            'newTranslationServer' => true,
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Sachsen.Digital',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
            1,
        ],
    ],
];
