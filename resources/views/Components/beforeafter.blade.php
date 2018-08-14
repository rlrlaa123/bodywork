<div class="sidebar developmentinfo {{ preg_match('/admin\/beforeafter/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">Before & After 관리</div>
    <div class="sideuser">Before & After</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/beforeafter$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/beforeafter\?page\=[0-9]/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/beforeafter\/[0-9]\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/beforeafter">Before & After 리스트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/beforeafter\/create/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/beforeafter/create">Before & After 등록하기</a>
            </li>
        </ul>
    </div>
</div>