<div class="sidebar developmentinfo {{ preg_match('/admin\/branch/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">지점 관리</div>
    <div class="sideuser">지점</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/branch$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/branch\?page\=[1-9]|[1-9][0-9]/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/branch\/[1-9]|[1-9][0-9]\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/branch">지점 리스트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/branch\/create/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/branch/create">지점 등록하기</a>
            </li>
        </ul>
    </div>
</div>