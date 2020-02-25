<?php

namespace Onest\VerticalLeftRightTimelineBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Onest\VerticalLeftRightTimelineBundle\DependencyInjection\VerticalLeftRightTimelineExtension;

class VerticalLeftRightTimelineBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new VerticalLeftRightTimelineExtension();
    }
}
