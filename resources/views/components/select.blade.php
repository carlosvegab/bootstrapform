<div class="mb-3">
    <label for="{{ $fieldname }}" class="form-label">{{ $labelname }}</label>
    <select name="{{ $fieldname }}" id="{{ $fieldname }}" class="form-select">
        @foreach (json_decode($values, true) as $val)
            <option value="{{ $val }}" @if($val==$selectedvalue) selected="selected" @endif>{{ $val }}</option>
        @endforeach
    </select>
</div>
