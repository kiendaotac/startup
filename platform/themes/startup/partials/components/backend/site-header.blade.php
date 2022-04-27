<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="form-group">
    <label class="control-label">{{ __('Description') }}</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
</div>

<div class="form-group">
    <label class="control-label">{{ __('Button Title') }}</label>
    <input type="text" name="button_title" value="{{ Arr::get($attributes, 'button_title') }}" class="form-control" placeholder="{{ __('Button Title') }}">
</div>

<div class="form-group">
    <label class="control-label">{{ __('Button Color') }}</label>
    {!! Form::color('button_color', Arr::get($attributes, 'button_color')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('Link') }}</label>
    <input type="text" name="link" value="{{ Arr::get($attributes, 'link') }}" class="form-control" placeholder="{{ __('Link') }}">
</div>
<div class="form-group">
    <label class="control-label">{{ __('Background Image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>
