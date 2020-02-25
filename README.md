# Vertical Timeline Bundle

The VerticalLeftRightTimelineBundle integrates the [CSS Timeline from CP Lepag](https://codepen.io/cplepage/pen/EozVXL) into SonataAdmin.


![timeline frontend](https://prawas.s3.amazonaws.com/timeline-front.png)

![timeline backend](https://prawas.s3.amazonaws.com/timeline-back.png)

## Installation

### composer.json

    {
        "require": {
            "prawas/vertical-timeline-bundle": "dev-master"
        },
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/prawas/vertical-timeline"
            }
        ]
    }

### cli

    composer update
    php bin/console assets:install
    php bin/console cache:clear
    php bin/console doctrine:schema:update --force

### bundles.php

    return [
        ...
        Onest\VerticalLeftRightTimelineBundle\VerticalLeftRightTimelineBundle::class => ['all' => true],
    ];

### css

Import white or black css into your main css file.

    @import '/public/bundles/verticalleftrighttimeline/css/white.css';

### Your view (index.html.twig)

Add {{ vertical_timeline() }} into your view to show your timeline.

    {{ vertical_timeline() }}
