<div class="sidebar developmentinfo {{ preg_match('/\/admin$/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/\/admin\/edit/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/\/admin\/popup/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/\/admin\/password/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">기본 관리</div>
    <div class="sideuser">기본</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin">홈 화면 관리</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/popup$/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/popup\/create/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/popup\/[1-9]|[1-9][0-9]\/edit/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/popup">팝업 배너 관리</a>
            </li>
            <li class="selector {{ preg_match('/\/password$/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/password">관리자 비밀번호 변경</a>
            </li>
        </ul>
    </div>
</div>