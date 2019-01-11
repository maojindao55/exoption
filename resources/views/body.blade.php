@include('exoption::header')
@foreach( $exoptions as $k => $v)
  @include('exoption::input', ['index' => $k, 'value' => $v['text'], 'is_key' => $v['is_key']])
@endforeach
@include('exoption::footer')
