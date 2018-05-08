@if(count($errors))
<div class="form-group">
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        @if($error = 'email')
        <li>Dalyvis tokiu el. paštu jau užsiregistravęs</li>
        @else
      <li>{{ $error}}</li>
      @endif
      @endforeach
    </ul>
  </div>
</div>
@endif
