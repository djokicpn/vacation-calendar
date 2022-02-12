<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                line-height: 0.5;
            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <th>Day</th>
                    @foreach (App\Models\User::all() as $user)
                        <th>{{ $user->name }}</th>
                    @endforeach
                </thead>
                <tbody>
                    @for ($i = 1; $i <= Carbon\Carbon::now()->daysInMonth; $i++ )
                    <tr>
                        <td> {{ $i }} </td>
                        @foreach (App\Models\User::with('absence')->get() as $user)
                            <td>
                                @foreach ( $user->absence as $absence )
                                    @if ($i>= Carbon\Carbon::parse($absence->start)->day && $i<=Carbon\Carbon::parse($absence->end)->day)
                                        <span>{{$absence->reason->symbol}}</span>
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </body>
</html>
