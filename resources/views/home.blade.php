@extends('layout')

@section('title', 'Home')

@section('content')
    <table>
        <tr>
            <td colspan="4">Home</td>
        </tr>
        @auth
            <tr>
                <td colspan="4">{{ auth()->user()->name }}</td>
            </tr>
        @endauth
    </table>
@endsection
