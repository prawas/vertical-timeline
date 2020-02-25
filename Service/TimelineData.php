<?php

namespace Onest\VerticalLeftRightTimelineBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Onest\VerticalLeftRightTimelineBundle\Entity\Item as TimelineItem;

class TimelineData
{
    /**
     * @var array;
     */
    private $data;

    public function __construct(EntityManagerInterface $em)
    {
        $this->data = $em->getRepository(TimelineItem::class)->findBy([], [ 'number' => 'ASC' ]);
    }

    public function get(): array
    {
        return $this->data;
    }
}
