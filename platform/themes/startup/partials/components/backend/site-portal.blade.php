<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>
<div class="form-group">
    <label class="control-label">{{ __('Limit') }}</label>
    <input type="text" name="limit" value="{{ Arr::get($attributes, 'limit', 4) }}" class="form-control" placeholder="{{ __('Limit') }}">
</div>
<div class="form-group">
    <label class="control-label">{{ __('Link') }}</label>
    <input type="text" name="link" value="{{ Arr::get($attributes, 'link') }}" class="form-control" placeholder="{{ __('Link') }}">
</div>
