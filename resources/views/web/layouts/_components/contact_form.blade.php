<form method="POST" action="{{ route('web.contact') }}">
    @csrf
    <input name="name" type="text" placeholder="Name" class="{{$class_board}}">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="{{$class_board}}">
    <br>
    <input name="email" type="text" placeholder="Email" class="{{$class_board}}">
    <br>
    <select name="subject" class="{{$class_board}}">
        <option value="">Contact Reason</option>
        <option value="doubts">Doubts</option>
        <option value="compliments">Compliments</option>
        <option value="complaint">Complaint</option>
    </select>
    <br>
    <textarea name="message" class="{{$class_board}}" placeholder="Your message here"></textarea>
    <br>
    <button type="submit" class="{{$class_board}}{{$class_text_area}}">SEND</button>
</form>