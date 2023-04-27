<form method="POST" action="{{ route('web.contact') }}">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Name" class="{{$class_board}}">
    <br>
    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="{{$class_board}}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="Email" class="{{$class_board}}">
    <br>
    <select name="subject" class="{{$class_board}}">
        <option value="">Contact Reason</option>
        @foreach($options as $option_value => $option_description)
            <option value="{{ $option_value }}" {{ old('subject') == $option_value ? 'selected' : '' }} >{{ $option_description }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="message" class="{{$class_board}}" placeholder="Your message here">{{ old('message') }}</textarea>
    <br>
    <button type="submit" class="{{$class_board}}{{$class_text_area}}">SEND</button>
</form>