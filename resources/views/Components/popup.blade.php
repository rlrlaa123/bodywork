<style>
  #popup{{ $popup->id }} {
    position: absolute;
    width: {{ $popup->width + 6 }}px;
    height: {{ $popup->height }}px;
    z-index: 200;
    top: {{ $popup->top }}px;
    left: {{ $popup->left }}px;
    background-color: white;
    border: 3px solid #cdcdcd;
  }
  .close-popup {
    position: absolute;
    right: 1px;
    bottom: 1px;
    background-color: white;
    width: 20px;
    height: 20px;
    font-size: 10px;
  }
</style>
<div id="popup{{ $popup->id }}">
  <img src="{{ $popup->image }}" width="{{ $popup->width }}" height="{{ $popup->height - 40 }}">
  <div style="position: relative; height: 40px;">
    <button class="close-popup">닫기</button>
  </div>
</div>