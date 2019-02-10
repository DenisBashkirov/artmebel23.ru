@if(count($collection) > 0)

    <table class="ui celled table">

        <thead>
        <tr>
            <th></th>
            @foreach($thead as $i)
                <th>{{ $i }}</th>
            @endforeach
        </tr>
        </thead>

        <tbody>

        @foreach($collection as $item)
            <tr>
                <td>
                    <a href="{{ route($slot . '.edit', $item->id)  }}"><i class="icon edit"></i></a>
                    <a href="{{ route($slot . '.show', $item->id)  }}"><i class="icon search"></i></a>
                </td>
                @foreach($tbody as $i)

                    @if(is_string($i))
                        <td>{{ $item->$i }}</td>
                    @else
                        <td>{{ $item->{$i[0]}->{$i[1]} }}</td>
                    @endif

                @endforeach
            </tr>
        @endforeach

        </tbody>
    </table>

@else

    @component('backend.components.crud.messages.no_data')
        В базе данных нет ни одной записи по данной сущности
    @endcomponent

@endif