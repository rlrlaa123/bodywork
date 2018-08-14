<div class="sidebar developmentinfo {{ preg_match('/admin\/notice/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/event/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/lesson/', $_SERVER['REQUEST_URI']) ||
                                       preg_match('/admin\/freelesson/', $_SERVER['REQUEST_URI'])
                                       ? '' : 'hide'}}">
    <div class="sidemenu">고객센터</div>
    <div class="sideuser">고객센터</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{ preg_match('/\/admin\/notice/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/notice\?page\=[0-9]/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/notice">공지사항</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/event/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/event\?page\=[0-9]/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/event">이벤트</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/lesson/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/lesson\?page\=[0-9]/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/lesson">PT 레슨 문의</a>
            </li>
            <li class="selector {{ preg_match('/\/admin\/freelesson/', $_SERVER['REQUEST_URI']) ||
                                   preg_match('/\/admin\/freelesson\?page\=[0-9]/', $_SERVER['REQUEST_URI'])
                                   ? 'active' : '' }}">
                <a href="/admin/freelesson">무료 PT 신청</a>
            </li>
        </ul>
    </div>
</div>