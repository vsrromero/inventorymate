<form method="POST" action="{{ route('web.contact') }}">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Name" class="{{$class_border}}">
    {{ $errors->has('name') ? $errors->first('name') : ''}}
    <br>
    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="{{$class_border}}">
    {{ $errors->has('phone') ? $errors->first('phone') : ''}}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="Email" class="{{$class_border}}">
    {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select name="subject" class="{{$class_border}}">
        <option value="">Contact Reason</option>
        @foreach($options as $option_value => $option_description)
            <option value="{{ $option_value }}" {{ old('subject') == $option_value ? 'selected' : '' }} >{{ $option_description }}</option>
        @endforeach
    </select>
    {{ $errors->has('subject') ? $errors->first('subject') : ''}}
    <br>
    <textarea name="message" class="{{$class_border}}" placeholder="Your message here">{{ old('message') }}</textarea>
    {{ $errors->has('message') ? $errors->first('message') : ''}}
    <br>
    <button type="submit" class="{{$class_border}}{{$class_text_area}}">SEND</button>
</form>

