@extends('beautymail::templates.minty')

@section('content')

    @include('beautymail::templates.minty.contentStart')
    <tr>
        <td class="title">
            Welcome Steve
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            Welcome to Google. Your new account comes with access to Google products, apps and services.
            Here are a few tips to get you started.
        </td>
    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td>
            {{-- @include('beautymail::templates.minty.button', ['text' => 'Sign in', 'link' => '#']) --}}
        </td>
    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>
    @include('beautymail::templates.minty.contentEnd')

@stop
