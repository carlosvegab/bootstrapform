<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="{{ $fieldname }}" id="{{ $fieldname }}" @if($checked=="1")checked="checked"@endif>
    <label class="form-check-label" for="{{ $fieldname }}">{{ $labelname }}</label>
</div>
