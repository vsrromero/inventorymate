<form>
    <input type="text" placeholder="Name" class="{{$class_board}}">
    <br>
    <input type="text" placeholder="Phone" class="{{$class_board}}">
    <br>
    <input type="text" placeholder="Email" class="{{$class_board}}">
    <br>
    <select class="{{$class_board}}">
        <option value="">Contact Reason</option>
        <option value="">Doubts</option>
        <option value="">Compliments</option>
        <option value="">Complains</option>
    </select>
    <br>
    <textarea class="{{$class_board}}">Your message here</textarea>
    <br>
    <button type="submit" class="{{$class_board}}{{$class_text_area}}">SEND</button>
</form>