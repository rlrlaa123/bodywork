<style>
  #popup{{ $popup->id }} {
    display: none;
    position: absolute;
    width: {{ $popup->width + 6 }}px;
    height: {{ $popup->height }}px;
    z-index: 200;
    top: {{ $popup->top }}px;
    left: {{ $popup->left }}px;
    background-color: white;
  }
  {}
</style>
<div id="popup{{ $popup->id }}">
  <div class="popup-inner">
    <div class="popup-image-container">
      <img src="{{ $popup->image }}" width="{{ $popup->width }}" height="{{ $popup->height - 40 }}">
    </div>
    <div class="popup-check-container">
      <div class="popup-label-container">
        <input id="popup-check{{ $popup->id }}" name="popup-check{{ $popup->id }}" type="checkbox">
        <label for="popup-check{{ $popup->id }}">
          오늘 하루 이창을 열지 않음.
        </label>
      </div>
      <button class="popup-close-button" onclick='closePopUp({{ $popup->id }}, 1)'>닫기</button>
    </div>
  </div>
</div>