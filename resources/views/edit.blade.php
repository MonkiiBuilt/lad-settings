<?php
/**
 * @author Jonathon Wallen
 * @date 26/6/17
 * @time 2:27 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>


@extends('laravel-administrator.layout')

@section('title', 'Meta tags')

@section('content')

    <h1>Create new setting</h1>

    {!! Form::model($setting, ['route' => ['lad-settings.update', $setting->id]]) !!}
    {!! Form::hidden('_method', 'PUT') !!}
    <div class="panel  panel__full">
        <div class="panel__inner">

            <div class="panel__row">
                <div class="panel__full">
                    <h4>Name</h4>
                </div>
                <div class="panel__full">
                    <fieldset class="{{ $errors->has('name') ? 'error' : '' }}">
                        {!! Form::text('name') !!}
                        <div class="form__error">{{ $errors->first('name') }}</div>
                    </fieldset>
                </div>
            </div>

            <div class="panel__row">
                <div class="panel__full">
                    <h4>Value</h4>
                </div>

                <div class="panel__full">
                    <fieldset class="{{ $errors->has('value') ? 'error' : '' }}">
                        {!! Form::textarea('value') !!}
                        <div class="form__error">{{ $errors->first('value') }}</div>
                    </fieldset>
                </div>
            </div>

            <div class="panel__row">
                <div class="panel__full">
                    {!! Form::submit('Save', ['name' => 'submit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>


@endsection


