<div class="sidebar developmentinfo {{ preg_match('/admin\/trainer/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">트레이너 관리</div>
    <div class="sideuser">트레이너</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/trainer$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/trainer\?page\=[0-9]/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/trainer\/[0-9]\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/trainer">트레이너 리스트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/trainer\/create/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/trainer/create">트레이너 등록하기</a>
            </li>
        </ul>
    </div>
</div>