<?php

namespace Sanasol\NovaFieldRefreshExample;

use Laravel\Nova\Fields\Field;

class RefreshButton extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-field-refresh';
}
