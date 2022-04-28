@foreach($podcasts as $podcast)
    <div class="item">
        <img src="{{$podcast->image}}" alt=" پادکست {{$podcast->title}} مشکلی دارد">
    </div>
@endforeach
