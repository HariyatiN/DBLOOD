<div class="form-group">
    <label for="{{ $name }}" class="control-label">{{ $title }}</label>
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        value="@isset($value){{ $value }}@else{{ old($name)}}@endisset" 
        placeholder="{{ $placeholder ?? '' }}"  
        class="form-control @error($name) is-invalid  @enderror">
    @error($name)
        <span class="float-right text-danger">{{ $message }}</span> 
    @enderror
</div>