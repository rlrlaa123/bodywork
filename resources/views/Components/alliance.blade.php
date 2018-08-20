<div class="sidebar developmentinfo {{ preg_match('/admin\/alliance/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">제휴업체 관리</div>
    <div class="sideuser">제휴업체</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/alliance$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/alliance\?page\=[1-9]|[1-9][0-9]/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/alliance\/[1-9]|[1-9][0-9]\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/alliance">제휴업체 리스트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/alliance\/create/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/alliance/create">제휴업체 등록하기</a>
            </li>
        </ul>
    </div>
</div>