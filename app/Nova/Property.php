<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;

class Property extends Resource
{
public static $model = \App\Models\Property::class;

public function fields(Request $request)
{
return [
ID::make()->sortable(),

Text::make('title')
->sortable()
->rules('required', 'max:255'),

Text::make('description')
->sortable()
->rules('required', 'max:255'),

Number::make('size')
->sortable()
->rules('required', 'max:255'),

Number::make('floor')
->sortable()
->rules('required', 'max:255'),

Text::make('image')
->sortable()
->rules('required', 'max:255'),

Number::make('room')
->sortable()
->rules('required', 'max:255'),

Number::make('price')
->sortable()
->rules('required', 'max:255'),

Text::make('address')
->sortable()
->rules('required', 'max:255'),

Text::make('post_code')
->sortable()
->rules('required', 'max:255'),

Text::make('city')
->sortable()
->rules('required', 'max:255'),
];
}

/**
* Get the cards available for the request.
*
* @param  \Illuminate\Http\Request  $request
* @return array
*/
public function cards(Request $request)
{
return [];
}

/**
* Get the filters available for the resource.
*
* @param  \Illuminate\Http\Request  $request
* @return array
*/
public function filters(Request $request)
{
return [];
}

/**
* Get the lenses available for the resource.
*
* @param  \Illuminate\Http\Request  $request
* @return array
*/
public function lenses(Request $request)
{
return [];
}

/**
* Get the actions available for the resource.
*
* @param  \Illuminate\Http\Request  $request
* @return array
*/
public function actions(Request $request)
{
return [];
}
}
