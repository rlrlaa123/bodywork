<div class="sidebar developmentinfo {{ preg_match('/admin\/notice/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/event/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/faq/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/inquiry/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">고객센터</div>
    <div class="sideuser">고객센터</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/notice/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/notice">공지사항</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/event/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/event">이벤트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/inquiry/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/inquiry">PT 레슨문의</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/inquiry/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/inquiry">무료 PT 신청</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/inquiry/', $_SERVER['REQUEST_URI']) ? 'active' : '' }}">
                <a href="/admin/inquiry">실시간 상담</a>
            </li>
        </ul>
    </div>
</div>