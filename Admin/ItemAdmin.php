<?php

namespace Onest\VerticalLeftRightTimelineBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

final class ItemAdmin extends AbstractAdmin
{
    protected $datagridValues = [
        '_page' => 1,
        '_sort_order' => 'ASC',
        '_sort_by' => 'number',
    ];

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('number', NumberType::class, [
                'label' => 'Номер',
            ])
            ->add('title', TextType::class, [
                'label' => 'Заголовок',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Описание',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('number')
            ->add('title')
            ->add('description')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('number', null, ['label' => 'Номер'])
            ->addIdentifier('title', null, ['label' => 'Заголовок'])
            ->addIdentifier('description', null, ['label' => 'Описание'])
        ;
    }
}
