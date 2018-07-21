@extends('layouts.default')

@section('content')
    @if (count($domains) < 1)
        Es wurden keine Domänen gefunden.
    @else
        <table class="table table-responsive">
            <caption>
                Domänen
            </caption>
            <colgroup>
                <col width="10">
                <col>
                <col width="200">
                <col width="20">
            </colgroup>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Angelegt am</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0 ; $i < count($domains) ; $i++)
                    <tr>
                        <td>{{ $i + 1 }}.</td>
                        <td>{{ $domains[$i]->domain }}</td>
                        <td>{{ $domains[$i]->created }}</td>
                        <td>
                            <span class="fas fa-list"></span>
                            <span class="fas fa-edit"></span>
                            <span class="fas fa-trash"></span>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    @endif
@endsection
