<div class="errors">
  @if ($errors->has('name'))
    <div class="form-error">
      {{ $errors->first('name') }}
    </div>
  @endif
  @if ($errors->has('email'))
    <div class="form-error">
      {{ $errors->first('email') }}
    </div>
  @endif
  @if ($errors->has('title'))
    <div class="form-error">
      {{ $errors->first('title') }}
    </div>
  @endif
  @if ($errors->has('type'))
    <div class="form-error">
      {{ $errors->first('type') }}
    </div>
  @endif
  @if ($errors->has('budget'))
    <div class="form-error">
      {{ $errors->first('budget') }}
    </div>
  @endif
  @if ($errors->has('description'))
    <div class="form-error">
      {{ $errors->first('description') }}
    </div>
  @endif
  @if ($errors->has('due_date'))
    <div class="form-error">
      {{ $errors->first('due_date') }}
    </div>
  @endif
  @if ($errors->has('password'))
    <div class="form-error">
      {{ $errors->first('password') }}
    </div>
  @endif
  @if ($errors->has('cover_image'))
    <div class="form-error">
      {{ $errors->first('cover_image') }}
    </div>
  @endif
  @if ($errors->has('body'))
    <div class="form-error">
      {{ $errors->first('body') }}
    </div>
  @endif
  @if ($errors->has('notes'))
    <div class="form-error">
      {{ $errors->first('notes') }}
    </div>
  @endif
  @if ($errors->has('client'))
    <div class="form-error">
      {{ $errors->first('client') }}
    </div>
  @endif
</div>
