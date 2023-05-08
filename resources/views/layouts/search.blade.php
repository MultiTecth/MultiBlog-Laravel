@foreach ($datas as $item)
    @isset($item->title)
        <a href="{{ url('tweet/' . $item->category . '/' . $item->id) }}">
            <div class="card">
                <div id="judul">
                    <h5>{{ $item->title }}</h5>
                </div>
                <div id="category">
                    <h6 class="gray">
                        {{ $item->category }}
                    </h6>
                </div>
            </div>
        </a>
    @endisset
    @isset($item->name)
        <a href="{{ url('user/@' . $item->username . '/profile') }}">
            <div class="card">
                <div class="img-card"><img src="{{ asset('storage/' . $item->imgpp) }}" alt=""></div>
                <div class="messange">
                    <div class="username">
                        <p>{{ $item->username }}</p>
                    </div>
                    <div class="text" id="username">{{ $item->username }}</< /div>
                    </div>
                </div>
            </div>
        </a>
    @endisset
@endforeach
