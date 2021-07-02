<style>
  #popup{{ $popup->id }} {
    display: none;
    position: absolute;
    width: {{ $popup->width + 6 }}px;
    z-index: 200;
    top: {{ $popup->top }}%;
    left: {{ $popup->left }}%;
    background-color: white;
    transform: translateX(-50%) translateY(-50%);
  }
  @media (max-width: 1024px), (orientation: portrait) {
    #popup{{ $popup->id }} {
      width: 80%;
      transform: translateX(-50%) translateY(-50%);
      top: 50%;
      left: 50%;
    }
  }
  @media (orientation: landscape) {
    #popup{{ $popup->id }} {
      height: {{ $popup->height }}px;
    }
    .popup-image {
      width: 100%;
      height: 100%;
      padding-bottom: 40px;
      cursor: pointer;
    }
  }
</style>
<div id="popup{{ $popup->id }}" class="popup-wrapper">
  <div class="popup-inner">
    <div class="popup-image-container">
      <img src="{{ $popup->image }}" class="popup-image" onclick="location.href='{{ $popup->link }}'">
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