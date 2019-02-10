<form class="ui form" method="POST" action="{{ $action }}">

    @foreach($inputs as $key=>$item)

        @if($item['type'] != 'select')
            <div class="field">
                <label for="slug">{{ $item['label'] }}</label>
                <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" id="{{ $item['name'] }}"
                       @if($item['placeholder'])
                       placeholder="например - {{ $item['placeholder'] }}"
                        @endif
                >
            </div>
        @endif

        @if($item['type'] == 'select')
            <div class="field">
                <label for="slug">{{ $item['label'] }}</label>
                <div class="ui selection dropdown">
                    <input type="hidden" name="{{ $item['name'] }}" value="{{ isset($item['value']) ? $item['value'] : '' }}">
                    <i class="dropdown icon"></i>
                    <div class="default text">{{ $item['label'] }}</div>
                    <div class="menu">
                        @foreach($item['options'] as $option)
                            <div class="item" data-value="{{ $option->id }}">{{ $option->name }} {{ isset($item['belongsTo']) ? $option->{$item['belongsTo']}->name : '' }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

    @endforeach

    <button class="ui button blue" type="submit">Готово</button>
    @csrf

</form>