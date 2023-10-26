<div class="student__login">
    <label for="{{$label}}" class="std__title">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" class="std__input">
    @error($name)
        <span class="error__message">{{$message}}</span>
    @enderror
</div>