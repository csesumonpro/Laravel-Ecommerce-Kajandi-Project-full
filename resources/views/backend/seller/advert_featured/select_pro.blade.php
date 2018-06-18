<option>--- Select Products ---</option>
@if(!empty($selected_pro))
  @foreach($selected_pro as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
