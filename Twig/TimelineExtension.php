<?php

namespace App\VerticalLeftRightTimelineBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

use App\VerticalLeftRightTimelineBundle\Service\TimelineData;

class TimelineExtension extends AbstractExtension
{
    private $data;

    public function __construct(TimelineData $data)
    {
        $this->data = $data->get();
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('vertical_timeline_data', [$this, 'getVerticalTimelineData']),
            new TwigFunction('vertical_timeline', [$this, 'verticalTimeline'], [
                'needs_environment' => true,
                'is_safe' => ['html'],
            ]),
        ];
    }

    public function getVerticalTimelineData()
    {
        return $this->data;
    }

    public function verticalTimeline(\Twig_Environment $environment)
    {
        return $environment->render('@VerticalLeftRightTimeline/index.html.twig', [
            'items' => $this->data,
        ]);
    }
}
