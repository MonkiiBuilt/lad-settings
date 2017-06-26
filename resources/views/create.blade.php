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

    {!! Form::open(['route' => ['lad-settings.store']]) !!}

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

    <div class="panel">
        <div class="panel__inner">

            <div class="panel__row">
                <div class="panel__full">
                    <h3>Settings</h3>
                </div>
            </div>

            <div class="panel__row">
                <div class="panel__full">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th class="col-1">&nbsp;</th>
                            <th class="col-2">Name</th>
                            <th class="col-3">Value</th>
                            <th class="col-4">&nbsp;</th>
                        </tr>
                        <tbody class=" sortable">
                        @foreach($settings as $setting)
                            <tr data-id="{{ $setting->id }}">
                                <td class="col-1">
                                    <svg class="icon icon-arrows-v"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrows-v"></use></svg>
                                </td>
                                <td class="col-2">{{ $setting->name }}</td>
                                <td class="col-3">{{ $setting->value }}</td>
                                <td class="col-4">
                                    <a href="{{ route('lad-settings.edit', ['id' => $setting->id]) }}">Edit</a>
                                    {!! Form::open(['route' => ['lad-settings.destroy', $setting->id],'class' => 'plain confirm']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    <button type="submit">Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <!-- This contains the content for Colorbox modal inline calls -->
    <div class='colorbox-inline'>
        <div id='confirm_content'>
            <h3>Are you sure you want to remove this setting?</h3>
            <a class="btn  btn--primary  confirm_link">Yes</a>
            <a class="btn  btn--tertiary  confirm_link">No</a>
        </div>
    </div>

@endsection

