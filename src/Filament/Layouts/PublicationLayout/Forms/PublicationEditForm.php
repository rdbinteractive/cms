<?php

namespace RDBI\CMS\Filament\Layouts\PublicationLayout\Forms;

use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use RDBI\CMS\FIlament\Layouts\BaseLayout\AdminGrid;
use RDBI\CMS\FIlament\Layouts\PublicationLayout\Forms\Templates\PrimarySectionTemplate;
use RDBI\CMS\FIlament\Layouts\PublicationLayout\Forms\Templates\SecondarySectionTemplate;

class PublicationEditForm
{
    public static function make(Form $form): Form
    {

        $primarySection = Tabs::make('')->tabs(PrimarySectionTemplate::make());

        $preSidebarFields = [];
        $defaultSidebarFields = SecondarySectionTemplate::make();
        $postSidebarFields = [];

        $secondarySection = array_merge($preSidebarFields, $defaultSidebarFields);
        $secondarySection = array_merge($secondarySection, $postSidebarFields);

        return $form->schema(
            array_merge(
                AdminGrid::make(
                    $primarySection,
                    $secondarySection
                )
            )
        );
    }
}
