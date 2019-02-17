# Laravel Nova Refresh Resources Field Example

## Description

This field adds magic refresh button field.

## Requrements

* Laravel 5.6+ with Nova.

## Installation

This package can be installed through Composer.
```bash
composer require s-anasol/nova-field-refresh-example
```

## Usage

1. Add the `Sanasol\NovaFieldRefreshExample\RefreshButton` field to your Nova Resource `fields` method.

### Example

```php
<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Sanasol\NovaFieldRefreshExample\RefreshButton;

class Page extends Resource
{
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            
            Text::make('Title'),
            
            RefreshButton::make('Refresh', 'id'),
        ];
    }
}

```

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.